<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function login(){
        return view('auth.pages.login');
    }

    function register(){
        return view('auth.pages.register');
    }

    function save(Request $request){
        return $request->validate([
            'nom'=>'required',
            'organisation'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);
    }
}
