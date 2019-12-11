<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function rooms() {

        /* Affichage du template rooms */
        return view('rooms')->with(array(
        ));

    }
}
