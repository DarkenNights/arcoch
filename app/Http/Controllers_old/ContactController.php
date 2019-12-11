<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {

        /* Affichage du template contact */
        return view('contact')->with(array(
        ));

    }
}
