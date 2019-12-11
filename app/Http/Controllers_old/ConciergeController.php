<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConciergeController extends Controller
{
    public function concierge() {

        /* Affichage du template conciergerie */
        return view('concierge')->with(array(
        ));

    }
}
