<?php

namespace App\Http\Controllers;

use App\Loss;
use App\Mail\SendOrder;
use App\Order;
use App\Product;
use App\Provider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

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
        $orders = [];

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
                $orders[] = $newOrder;

                try {
                    $newOrder->save();
                } catch (\Exception $e) {
                    $response = $e;
                } finally {
                    if($response != 'save_ok') return response()->json($response);
                }
            }
        }
        Mail::to('resto@arcoch.fr')->send(new SendOrder($orders));
        return response()->json($response);
    }

    public function orderHistory()
    {
        $providers = Provider::all();
        $ordersDB = Order::orderBy('created_at', 'DESC')->get();
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
        $losses = Loss::orderBy('created_at', 'DESC')->get();
        $products = Product::orderBy('provider_id', 'ASC')->get();
        $providers = Provider::all();
        return view('nimda.loss', array(
            'losses' => $losses,
            'products' => $products,
            'providers' => $providers
        ));
    }

    public function addLoss(Request $request)
    {
        $productId = Input::get('product');
        $quantity = Input::get('quantity');

        $product = Product::find($productId);

        $loss = new Loss();
        $loss->product()->associate($product);
        $loss->quantity = $quantity;
        $loss->price = $product->price * $quantity;
        try
        {
            $loss->save();
            Session::flash('success', 'La perte a été enregistré');
        }
        catch (\Exception $e)
        {
            Session::flash('error', 'Erreur lors de l\'enregistrement de la perte');
        }

        return redirect()->route('nimdaLoss');
    }

}
