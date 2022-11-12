<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

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
        $utilisateur->password = Hash::make($request->password);
        $save = $utilisateur->save();

        if($save){
            return back()->with('success','Compte crée');
        }else{
            return back()->with('fail','Compte non-crée');
        }
    }

    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $userinfo = Utilisateur::where('email','=',$request->email)->first();

        if(!$userinfo){
            return back()->with('fail','Email introuvable');
        }else{
            if(Hash::check($request->password, $userinfo->password)){
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('/dashboard');
            }else{
                return back()->with('fail','Mot de passe incorrect');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        return view('dashboard', $data);
    }
}
