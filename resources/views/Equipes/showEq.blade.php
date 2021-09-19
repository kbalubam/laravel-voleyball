@extends('template.welcome')

@section('content')
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h3 class="card-title">Club: {{$equipe->nom}}</h3>
            <h3 class="card-title">Ville: {{$equipe->ville}}</h3>
            <h3 class="card-title">Pays: {{$equipe->pays}}</h3>
            <h3 class="card-title">Nbr Max: {{$equipe->maxjoueur}}</h3>
            <h3 class="card-title">Continent: {{$equipe->continent}}</h3>
        <a href="{{route('equipe.index')}}" class="btn btn-info">ALL EQUIPE</a>

        </div>
    </div>
@endsection

