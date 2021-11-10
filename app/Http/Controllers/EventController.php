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

    public function create(){
        return view('produtos.create');
    }

    public function produtos(){
        $search = request('search');

        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        }
        else{
            $events = Event::all();
        }
        return view('produtos', ['events'=>$events, 'search'=>$search]);

    }

    public function store(Request $request){
        $product = new Event;

        $product->title = $request->title;
        $product->desc = $request->desc; 
        $product->local = $request->local;
        $product->preco = $request->preco;

         //image upload
         if($request->hasFile('image') ** $request->file('image')-> isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/produtos'), $imageName);

            $product->image = $imageName;
         }

        $product->save();

        return redirect ('/produtos')->with('msg','Produto lançado com sucesso!');

    }
}

