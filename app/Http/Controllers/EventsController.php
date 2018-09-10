<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events;

class EventsController extends Controller
{
    
    public function index()
    {

        $events = Events::all();

        return view('events.index', compact('events'));
    }

     
    public function create()
    {
        return view('events.create');
    }

     
    public function store(Request $request)
    {
        
        Events::create($request->all());

        return redirect('events/create');

    }

     
    public function show($id)
    {
        $events = Events::findOrFail($id);

        return view('events.edit', compact('events'));
    }

     
    public function edit($id)
    {
        $events = Events::findOrFail($id);

        return view('events.edit', compact('events'));
    }

    
    public function update(Request $request, $id)
    {
        Events::findOrFail($id)->update($request->all());
        return redirect('events');
    }

    
    public function destroy($id)
    {
        Events::findOrFail($id)->delete();
        return redirect('events');
    }
}
