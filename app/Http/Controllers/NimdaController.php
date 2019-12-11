<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class NimdaController extends Controller
{
    public function stock()
    {
        return view('nimda.stock');
    }

    public function order()
    {
        $providers = Provider::all();
        return view('nimda.order', array(
            'providers' => $providers
        ));
    }

    public function orderHistory()
    {
        return view('nimda.orderHistory');
    }

}
