<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $events = Event::orderBy('start', 'ASC')->get();
        $nextEvent = $events->first();
        foreach ($events as $event) {
            if ($event->highlight) {
                $nextEvent = $event;
                break;
            }
        }

        /* Affichage du template index */
        return view('index')->with(array(
            'event' => $nextEvent
        ));

    }
}
