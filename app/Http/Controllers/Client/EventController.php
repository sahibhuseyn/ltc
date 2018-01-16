<?php

namespace App\Http\Controllers\Client;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function eventList(){
        $language = session('language');
        $events = Event::getEvents($language);

        return view('client.events.events', compact('events'));
    }
}
