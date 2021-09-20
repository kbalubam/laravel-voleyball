<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dataEq =  Equipe::all();
        $joueurs =  Joueur::all();
        $count = 0;
        return view('home',compact( 'joueurs', 'dataEq'));
    }
}
