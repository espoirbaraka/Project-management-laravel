<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use App\Models\Tache;
use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\DB;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        $projets = Projet::where('created_by','=',session('LoggedUser'))->get();
        foreach ($projets as $row){
            $taches = Tache::where('codeprojet','=',$row->id)->get();
        }
        return view('projet/projets', $data, compact('projets', 'taches'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        return view('projet/newprojet', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation'=>['required','string'],
            'budget'=>['required'],
            'localisation'=>['required','string'],
            'bailleur'=>['required','string']
        ]);
        $input = $request->all();
        Projet::create($input);
        return redirect('projet/list')->with('flash_message', 'Projet créé !!!');
    }

    public function invitation()
    {
        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        $invitations = DB::table('participations')
                        ->join('projets', 'participations.code_projet', '=', 'projets.id')
                        ->join('utilisateurs', 'projets.created_by', '=', 'utilisateurs.id')
                        ->select('projets.*', 'participations.created_at as cr', 'utilisateurs.*')
                        ->where('participations.code_user','=',session('LoggedUser'))->get();
        return view('projet/invitation', $data, compact('invitations'));
    }

    public function participation()
    {
        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        return view('projet/participation', $data);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ['LoggedUserInfo'=>Utilisateur::where('id','=',session('LoggedUser'))->first()];
        $projets = Projet::where("id",$id)->get()->first();
        return view("projet.update", $data, compact('projets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $projet = Projet::find($request->id);
        $projet->designation = $request->designation;
        $projet->budget = $request->budget;
        $projet->localisation = $request->localisation;
        $projet->bailleur = $request->bailleur;

        $projet->update();

        return redirect()->intended('/projet/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Projet::destroy($id);
    }
}
