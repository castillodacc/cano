<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events;
use App\Galleries;
use DB;
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
        $total = array();    
        $total = DB::table('galleries')
                ->select(DB::raw('sum(galleries.total) AS total'))
                ->where('events.id', $id)
                ->join('events','galleries.events_id','=','events.id') 
                ->get();
 
 
        /*('SELECT sum(G.total) FROM `galleries` AS G JOIN events AS E ON G.events_id = E.id WHERE E.id= $id GROUP BY G.events_id');
*/
        return view('events.show', compact('events','total'));
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
