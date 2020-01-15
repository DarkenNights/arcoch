<?php

namespace App\Http\Controllers;

use App\Loss;
use App\Order;
use App\Product;
use App\Provider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class NimdaController extends Controller
{
    public function stock()
    {
        $providers = Provider::all();
        return view('nimda.stock', array(
            'providers' => $providers
        ));
    }

    public function saveStocks()
    {
        $productId = Input::get('productId');
        $stock = Input::get('stock');
        $buffer = Input::get('buffer');
        $returnMessage = '';

        $product = Product::find($productId);
        $product->stock = $stock;
        $product->buffer = $buffer;
        try {
            $product->save();
            $returnMessage = '<strong>' . $product->name . '</strong> : le stock est passé à ' . $stock . ' et le stock tampon à ' . $buffer;
        }catch (\Exception $e) {
            $returnMessage = 'Le stock pour ' . $product->name . ' n\'a pas pu être modifié.<br>' . $e;
        }

        return response()->json($returnMessage);
    }

    public function order()
    {
        $providers = Provider::all();
        return view('nimda.order', array(
            'providers' => $providers
        ));
    }

    public function addOrder()
    {
        $providerShortName = Input::get('providerShortName');
        $productIds = explode(',', Input::get('productIds'));
        $quantitiesCarton = explode(',', Input::get('quantitiesCarton'));
        $prices = explode(',', Input::get('prices'));
        $provider = Provider::where('short_name', '=', $providerShortName)->first();

        $orderNumber = Order::max('orderNumber');
        $nextOrderNumber = $orderNumber + 1;
        $response = 'save_ok';

        for ($i = 0; $i < count($productIds); $i++)
        {
            if($quantitiesCarton[$i] > 0) {
                $product = Product::find($productIds[$i]);

                $newOrder = new Order();
                $newOrder->orderNumber = $nextOrderNumber;
                $newOrder->product()->associate($product);
                $newOrder->provider()->associate($provider);
                $newOrder->quantity = $quantitiesCarton[$i];
                $newOrder->price = $prices[$i];

                try {
                    $newOrder->save();
                } catch (\Exception $e) {
                    $response = 'save_ko';
                } finally {
                    if($response == 'save_ko') return response()->json($response);
                }
            }
        }
        return response()->json($response);
    }

    public function orderHistory()
    {
        $providers = Provider::all();
        $ordersDB = Order::all();
        $orders = [];
        foreach ($ordersDB as $orderDB) {
            if (empty($orders[$orderDB->provider_id])) $orders[$orderDB->provider_id] = [];
            if (empty($orders[$orderDB->provider_id][$orderDB->orderNumber])) $orders[$orderDB->provider_id][$orderDB->orderNumber] = [];
            $orders[$orderDB->provider_id][$orderDB->orderNumber][] = $orderDB;
        }
        return view('nimda.orderHistory', array(
            'providers' => $providers,
            'orders' => $orders
        ));
    }

    public function loss()
    {
        $losses = Loss::all();
        $products = Product::orderBy('provider_id', 'ASC')->get();
        $providers = Provider::all();
        return view('nimda.loss', array(
            'losses' => $losses,
            'products' => $products,
            'providers' => $providers
        ));
    }

    public function addLoss()
    {
        $productId = Input::get('product');
        $quantity = Input::get('quantity');
        dump($productId);
        dump($quantity);
        exit;

    }

}
