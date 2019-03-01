<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhirlpoolController extends Controller
{
    public function whirlpool() {

        /* Affichage du template spa */
        return view('whirlpool')->with(array(
        ));

    }
}
