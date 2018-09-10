<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Gallerys;
use App\Events;

class galleryController extends Controller
{
     
    public function index()
    { 
         $gallerys = Gallerys::all(); 
         return view('gallery.index', compact('gallerys'));
    }

     
    public function create()
    {
        $gallerys = Gallerys::all();
        $events = Events::all();

        return view('gallery.create',compact('gallerys','events'));    
    }

     
    public function store(Request $request)
    {
        Gallerys::create($request->all());

        return redirect('gallery/create');
    }

     
    public function show($id)
    {
        //
    }

     
    public function edit($id)
    {
        $events = Events::all();
        $gallerys = Gallerys::findOrFail($id);

        return view('gallery.edit', compact('gallerys', 'events'));
    }

     
    public function update(Request $request, $id)
    {
        Gallerys::findOrFail($id)->update($request->all());
        return redirect('gallery');
    }

     
    public function destroy($id)
    {
        Gallerys::findOrFail($id)->delete();
        return redirect('gallery');
    }
}
