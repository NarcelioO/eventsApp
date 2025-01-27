<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Index(){
        $events = Event::all();
        return view('home',['events' => $events]);
    }

    public function create(){
        return view('event.create');
    }

    public function store(Request $request){
        $event = new Event();
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;
        
        if($request->hasFile('image') ** $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $request->image->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }
        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso');
       
    }
    public function show($id){
        $event = Event::findOrfail($id);
        return view('event.show', ['event'=>$event]);
    }


}
