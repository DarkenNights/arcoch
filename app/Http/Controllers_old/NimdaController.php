<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NimdaController extends Controller
{
    public function stock()
    {
        return view('layout.nimda');
    }
}
