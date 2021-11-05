<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function contato(){
        return view('contato');
    }

    public function produtos(){
        $events = Event::all();
        return view('produtos', ['events' => $events]);
    }
}

