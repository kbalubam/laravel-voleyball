<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datajoueur = Joueur::all();
        return view('joueurs.AllJoueur', compact('datajoueur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        $roles = Role::all();
        return view('joueurs.createJoueur', compact('continents','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newEntry = new Joueur();
        $newEntry->nom = $request->nom;
        $newEntry->prenom = $request->prenom;
        $newEntry->age= $request->age;
        $newEntry->telephone = $request->telephone;
        $newEntry->email = $request->email;
        $newEntry->email = $request->genre;
        $newEntry->email = $request->pays;
        $newEntry->email = $request->role_id;
        $newEntry->email = $request->equipe_id;
        $newEntry->save();
        return redirect()->route('joueur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view('joueurs.showJoueur', compact('joueur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        $roles = Role::all();
        $equipes = Equipe::all();
        return view('joueurs.editJ', compact('joueur', 'roles', 'equipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->pays = $request->pays;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;

        Storage::disk("public")->delete("img/".$joueur->url);
        $joueur->url =  $request->file('url');
        $joueur->url->save();
        $joueur->save();
        $request->file("url")->storePublicly("img","public");
        return redirect()->route("joueur.index");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        Storage::disk("public")->delete("img/".$joueur->url);
        $joueur->delete();
        return redirect()->route('joueur.index');
    }
}
