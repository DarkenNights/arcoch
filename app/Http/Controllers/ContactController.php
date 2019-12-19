<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function contact() {

        /* Affichage du template contact */
        return view('contact')->with(array(
        ));

    }
}
