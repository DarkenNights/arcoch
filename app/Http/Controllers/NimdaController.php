<?php

namespace App\Http\Controllers;

use App\Loss;
use App\Mail\SendOrder;
use App\Order;
use App\Product;
use App\Provider;
use Carbon\Carbon;
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
        $providers = Provider::withTrashed()->get();
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
        $loss->price = $product->price_kg * $quantity;
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

    public function getLosses()
    {
        $start = Input::get('start');
        $end = Input::get('end');

        $losses = Loss::where('created_at', '>=', $start)->where('created_at', '<=', $end)->sum('price');

        return response()->json($losses);
    }

    public function cost()
    {
        $products = Product::orderBy('provider_id', 'ASC')->get();
        $providers = Provider::all();
        return view('nimda.cost', array(
            'products' => $products,
            'providers' => $providers
        ));
    }

    public function booking()
    {
        $dayOfTheWeek = Carbon::now()->dayOfWeek;
        $dates = [];
        switch ($dayOfTheWeek) {
            case 1:
                $dates[] = Carbon::now();
                $dates[] = Carbon::now()->addDays(1);
                $dates[] = Carbon::now()->addDays(2);
                $dates[] = Carbon::now()->addDays(3);
                $dates[] = Carbon::now()->addDays(4);
                $dates[] = Carbon::now()->addDays(5);
                $dates[] = Carbon::now()->addDays(6);
                $dates[] = Carbon::now()->addDays(7);
                $dates[] = Carbon::now()->addDays(8);
                $dates[] = Carbon::now()->addDays(9);
                $dates[] = Carbon::now()->addDays(10);
                $dates[] = Carbon::now()->addDays(11);
                $dates[] = Carbon::now()->addDays(12);
                $dates[] = Carbon::now()->addDays(13);
                break;
            case 2:
                $dates[] = Carbon::now()->subDays(1);
                $dates[] = Carbon::now();
                $dates[] = Carbon::now()->addDays(1);
                $dates[] = Carbon::now()->addDays(2);
                $dates[] = Carbon::now()->addDays(3);
                $dates[] = Carbon::now()->addDays(4);
                $dates[] = Carbon::now()->addDays(5);
                $dates[] = Carbon::now()->addDays(6);
                $dates[] = Carbon::now()->addDays(7);
                $dates[] = Carbon::now()->addDays(8);
                $dates[] = Carbon::now()->addDays(9);
                $dates[] = Carbon::now()->addDays(10);
                $dates[] = Carbon::now()->addDays(11);
                $dates[] = Carbon::now()->addDays(12);
                break;
            case 3:
                $dates[] = Carbon::now()->subDays(2);
                $dates[] = Carbon::now()->subDays(1);
                $dates[] = Carbon::now();
                $dates[] = Carbon::now()->addDays(1);
                $dates[] = Carbon::now()->addDays(2);
                $dates[] = Carbon::now()->addDays(3);
                $dates[] = Carbon::now()->addDays(4);
                $dates[] = Carbon::now()->addDays(5);
                $dates[] = Carbon::now()->addDays(6);
                $dates[] = Carbon::now()->addDays(7);
                $dates[] = Carbon::now()->addDays(8);
                $dates[] = Carbon::now()->addDays(9);
                $dates[] = Carbon::now()->addDays(10);
                $dates[] = Carbon::now()->addDays(11);
                break;
            case 4:
                $dates[] = Carbon::now()->subDays(3);
                $dates[] = Carbon::now()->subDays(2);
                $dates[] = Carbon::now()->subDays(1);
                $dates[] = Carbon::now();
                $dates[] = Carbon::now()->addDays(1);
                $dates[] = Carbon::now()->addDays(2);
                $dates[] = Carbon::now()->addDays(3);
                $dates[] = Carbon::now()->addDays(4);
                $dates[] = Carbon::now()->addDays(5);
                $dates[] = Carbon::now()->addDays(6);
                $dates[] = Carbon::now()->addDays(7);
                $dates[] = Carbon::now()->addDays(8);
                $dates[] = Carbon::now()->addDays(9);
                $dates[] = Carbon::now()->addDays(10);
                break;
            case 5:
                $dates[] = Carbon::now()->subDays(4);
                $dates[] = Carbon::now()->subDays(3);
                $dates[] = Carbon::now()->subDays(2);
                $dates[] = Carbon::now()->subDays(1);
                $dates[] = Carbon::now();
                $dates[] = Carbon::now()->addDays(1);
                $dates[] = Carbon::now()->addDays(2);
                $dates[] = Carbon::now()->addDays(3);
                $dates[] = Carbon::now()->addDays(4);
                $dates[] = Carbon::now()->addDays(5);
                $dates[] = Carbon::now()->addDays(6);
                $dates[] = Carbon::now()->addDays(7);
                $dates[] = Carbon::now()->addDays(8);
                $dates[] = Carbon::now()->addDays(9);
                break;
            case 6:
                $dates[] = Carbon::now()->subDays(5);
                $dates[] = Carbon::now()->subDays(4);
                $dates[] = Carbon::now()->subDays(3);
                $dates[] = Carbon::now()->subDays(2);
                $dates[] = Carbon::now()->subDays(1);
                $dates[] = Carbon::now();
                $dates[] = Carbon::now()->addDays(1);
                $dates[] = Carbon::now()->addDays(2);
                $dates[] = Carbon::now()->addDays(3);
                $dates[] = Carbon::now()->addDays(4);
                $dates[] = Carbon::now()->addDays(5);
                $dates[] = Carbon::now()->addDays(6);
                $dates[] = Carbon::now()->addDays(7);
                $dates[] = Carbon::now()->addDays(8);
                break;
            case 0:
                $dates[] = Carbon::now()->subDays(6);
                $dates[] = Carbon::now()->subDays(5);
                $dates[] = Carbon::now()->subDays(4);
                $dates[] = Carbon::now()->subDays(3);
                $dates[] = Carbon::now()->subDays(2);
                $dates[] = Carbon::now()->subDays(1);
                $dates[] = Carbon::now();
                $dates[] = Carbon::now()->addDays(1);
                $dates[] = Carbon::now()->addDays(2);
                $dates[] = Carbon::now()->addDays(3);
                $dates[] = Carbon::now()->addDays(4);
                $dates[] = Carbon::now()->addDays(5);
                $dates[] = Carbon::now()->addDays(6);
                $dates[] = Carbon::now()->addDays(7);
        }

        /*
        * The following sample uses a PHP array to construct the JSON data and php-curl to post it to the API.
        * This sample will get the availability for one property with the specified parameters.
        * Change the propId and other parameters to values for your account to use and test.
        */
        $auth = array();
        $auth['apiKey'] = 'apiKeyCaribou2Doux$01';
        $auth['propKey'] = 'propKeyCaribou2Doux$01';

        $data = array();
        $data['authentication'] = $auth;
        /* Restrict the bookings using any combination of the following */
        $data['arrivalFrom'] = $dates[0]->format('Ymd');
        $data['arrivalTo'] = $dates[13]->format('Ymd');
        $data['includeInfoItems'] = true;

        $json = json_encode($data);

        $url = "https://api.beds24.com/json/getBookings";

        $ch=curl_init();
        curl_setopt($ch, CURLOPT_POST, 1) ;
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $results = json_decode(curl_exec($ch));
        curl_close ($ch);

        $bookings = [];
        foreach ($dates as $date) {
            $bookings[$date->format('Y-m-d')] = [];
        }
        foreach ($results as $result) {
            if($result->status == '1' || $result->status == '2') {
                $firstNight = Carbon::parse($result->firstNight);
                $lastNight = Carbon::parse($result->lastNight);
                $diff = $lastNight->diffInDays($firstNight);
                for ($i = 0; $i <= $diff; $i++) {
                    $bookings[$firstNight->addDays($i)->format('Y-m-d')][$result->unitId] = $result;
                }
            }
        }

        foreach ($dates as $date) {
            ksort($bookings[$date->format('Y-m-d')]);
        }

//        dump($bookings['2020-02-01'][0]);
//        exit;
        return view('nimda.booking', array(
            'bookings' => $bookings
        ));
    }

}
