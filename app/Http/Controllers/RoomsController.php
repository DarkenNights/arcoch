<?php

namespace App\Http\Controllers;

class RoomsController extends Controller
{
    public function rooms() {

        /* Affichage du template rooms */
        return view('rooms')->with(array(
        ));

    }
}
