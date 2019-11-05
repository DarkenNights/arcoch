<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderedController extends Controller
{
    public function stock()
    {
        return view('stock');
    }
}
