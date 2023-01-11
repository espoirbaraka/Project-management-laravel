<?php

namespace App\Http\Controllers;

use App\Models\Bailleur;
use App\Models\Projet;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class BailleurController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        $projet = Projet::where("id",$id)->get()->first();
        return view('bailleur/newbailleur', $data, compact('projet'));
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
        Bailleur::create($input);
        return redirect('projet/list')->with('flash_message', 'Bailleur ajouté !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bailleur  $bailleur
     * @return \Illuminate\Http\Response
     */
    public function show(Bailleur $bailleur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bailleur  $bailleur
     * @return \Illuminate\Http\Response
     */
    public function edit(Bailleur $bailleur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bailleur  $bailleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bailleur $bailleur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bailleur  $bailleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bailleur $bailleur)
    {
        //
    }
}
