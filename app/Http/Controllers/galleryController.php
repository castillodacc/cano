<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Galleries;
use App\Events;

class galleryController extends Controller
{
     
    public function index()
    { 
         $galleries = Galleries::all(); 
         return view('gallery.index', compact('galleries'));
    }

     
    public function create()
    {
        $galleries = Galleries::all();
        $events = Events::all();

        return view('gallery.create',compact('galleries','events'));    
    }

     
    public function store(Request $request)
    {
        Galleries::create($request->all());

        return redirect('gallery/create');
    }

     
    public function show($id)
    {
        //
    }

     
    public function edit($id)
    {
        $events = Events::all();
        $galleries = Galleries::findOrFail($id);
        $start = Galleries::where('id',$id)->sum('start');
        $end = Galleries::where('id',$id)->sum('end');
 
        return view('gallery.edit', compact('galleries', 'events','start','end'));
    }

     
    public function update(Request $request, $id)
    {
        Galleries::findOrFail($id)->update($request->all());
        return redirect('gallery');
    }

     
    public function destroy($id)
    {
        Galleries::findOrFail($id)->delete();
        return redirect('gallery');
    }
}
