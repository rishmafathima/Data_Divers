<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    function show(){
        $data = Users::all();
        return view('home',['users'=>$data]);
    }
}
