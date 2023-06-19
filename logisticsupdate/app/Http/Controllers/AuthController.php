<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function registration() {
        return view('auth.registration');
    }

    public function store(Request $request){
        $data = $request->validate([
            'u_email' => 'required|email',
            'u_pwd' => 'required',
            'u_type' => 'required|numeric'
        ]);

        $newUser = User::create($data);

        return redirect(route('auth.login'));
    }
    public function login() {
        return view('auth.login');
    }

    public function check(Request $request){
        $credentials = $request->validate([
            'u_email' => 'required|email',
            'u_pwd' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            return view('dashboard');
        }

        return "<h2>Email or Password Invalid!</h2>";
    }

    
}
