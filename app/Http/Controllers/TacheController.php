<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\Tache;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function tachebyprojet($projet)
    {
        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        $tache = Tache::find($projet);
        return view('projets', $data)->with('projetbyuser', $projet);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        $projet = Projet::where("id",$id)->get()->first();
        return view('tache/newtache', $data, compact('projet'));
    }


    public function demarrer(Request $request)
    {
        $tache = Tache::find($request->id);
        $tache->statut = 1;

        $tache->update();

        return redirect()->intended('/projet/list');
    }

    public function achever(Request $request)
    {
        $tache = Tache::find($request->id);
        $tache->statut = 2;

        $tache->update();

        return redirect()->intended('/projet/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Tache::create($input);
        return redirect('projet/list')->with('flash_message', 'Tache créé !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
