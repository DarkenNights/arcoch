<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $event = Event::orderBy('start', 'ASC')->first();

        /* Affichage du template index */
        return view('index')->with(array(
            'event' => $event
        ));

    }
}
