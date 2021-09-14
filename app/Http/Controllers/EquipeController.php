<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Joueur;
use Database\Seeders\JoueurSeeder;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataEq = Equipe::all();
        $dataEq2 = Joueur::all();
        return view('Equipes.allEq', compact('dataEq','dataEq2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataEq = Equipe::all();
        return view('Equipes.createEq' ,compact('dataEq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEntry = new Equipe;
        $newEntry->nom = $request->nom;
        $newEntry->ville = $request->ville;
        $newEntry->pays= $request->pays;
        $newEntry->maxjoueur = $request->maxjoueur;
        $newEntry->continent_id = $request->continent_id;
        $newEntry->save();
        return redirect()->route('homeE');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $id)
    {
        $equipe = $id;
        $dataEq = Equipe::all();
        return view('Equipes.showEq',compact('equipe', 'dataEq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        //
    }
}
