<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }
    
public function edit()
    {
        return view('users.edit');
    }
    
public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required' 
        ]);
        
        User::create($request->all());
         
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }
    
public function destroy(User $user)
    {
        $user->delete();
         
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}
