<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{
    
    public function index()
    {

        $users = User::all();
        return view('users.index', compact('users'));
    }

     
    public function create()
    {
        $roles = Role::all();
        $users = User::all();
        return view('users.create', compact('users','roles'));


    }

     
    public function store(Request $request)
    {
        
        User::create($request->all());

        return redirect('users');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $roles = Role::all();
        $users = User::findOrFail($id);
        return view('users.edit', compact('users','roles'));
    }

    
    public function update(Request $request, $id)
    {
        User::findOrFail($id)->update($request->all());
        return redirect('users');
    }

    
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('users');
    }
}
