<?php

namespace App\Http\Controllers;

class ConciergeController extends Controller
{
    public function concierge() {

        /* Affichage du template conciergerie */
        return view('concierge')->with(array(
        ));

    }
}
