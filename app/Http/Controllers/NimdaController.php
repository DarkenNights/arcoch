<?php

namespace App\Http\Controllers;

use App\Product;
use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use mysql_xdevapi\Exception;

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
        $productId = Input::get('productId');
        $quantityCarton = Input::get('quantityCarton');
    }

    public function orderHistory()
    {
        return view('nimda.orderHistory');
    }

}
