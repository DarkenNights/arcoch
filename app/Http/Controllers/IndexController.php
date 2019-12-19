<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index() {

        $countdown_events = Event::where('start', '>', Carbon::now()->toDateTimeString())->orderBy('start', 'ASC')->get();
        $nextEvent = $countdown_events->first();
        foreach ($countdown_events as $event) {
            if ($event->highlight) {
                $nextEvent = $event;
                break;
            }
        }

        $next_events = Event::where('start', '<=', Carbon::now()->addMonths(4)->toDateTimeString())->orderBy('start', 'ASC')->get();
        $events = [];
        foreach ($next_events as $next_event) {
            if(empty($events[$next_event->start->year . '-' . $next_event->start->month])) $events[$next_event->start->year . '-' . $next_event->start->month] = [];
            array_push($events[$next_event->start->year . '-' . $next_event->start->month], $next_event);
        }

        /* Affichage du template index */
        return view('index')->with(array(
            'event' => $nextEvent,
            'events' => $events
        ));

    }
}
