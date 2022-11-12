<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class MainController extends Controller
{
    function login(){
        return view('auth.pages.login');
    }

    function register(){
        return view('auth.pages.register');
    }

    function save(Request $request){
        $request->validate([
            'nom'=>'required',
            'postnom'=>'required',
            'prenom'=>'required',
            'organisation'=>'required',
            'email'=>'required|email|unique:utilisateurs',
            'password'=>'required'
        ]);

        $utilisateur = new Utilisateur;
        $utilisateur->nom = $request->nom;
        $utilisateur->postnom = $request->postnom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->organisation = $request->organisation;
        $utilisateur->password = $request->password;
        $save = $utilisateur->save();

        if($save){
            return back()->with('success','Compte crée');
        }else{
            return back()->with('fail','Compte non-crée');
        }
    }
}
