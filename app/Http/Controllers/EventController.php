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

    public function create(){
        return view('produtos.create');
    }

    public function produtos(){
        $events = Event::all();
        return view('produtos', ['events' => $events]);
    }

    public function store(Request $request){
        $product = new Event;

        $product->title = $request->title;
        $product->desc = $request->desc; 
        $product->local = $request->local;
        $product->preco = $request->preco;

        $product->save();

        return redirect ('/');
    }
}

