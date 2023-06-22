<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'u_email' => 'required|email',
            'u_pwd' => 'required',
            'u_type' => 'required|numeric'
        ]);

        $newUser = User::create($data);

        return redirect(route('user.index'));
    }

    public function edit(User $user){
        return view('user.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request){
        $data = $request->validate([
            'u_email' => 'required|email',
            'u_pwd' => 'required',
            'u_type' => 'required|numeric'
        ]);

        $user->update($data);

        return redirect(route('user.index'))->with('success', 'User Updated Successfully');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect(route('user.index'))->with('success', 'User Deleted Successfully');
    }
}
