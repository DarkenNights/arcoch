<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinnerController extends Controller
{
    public function dinner() {

        /* Affichage du template restaurant */
        return view('dinner')->with(array(
        ));

    }
}
