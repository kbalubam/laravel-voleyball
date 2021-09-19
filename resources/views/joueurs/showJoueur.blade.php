@extends('template.welcome')
@section('content')
@extends('template.welcome')

@section('content')
    <div class="card" style="width: 24rem;">
        @if (Storage::disk('public')->exists('img/'.$joueur->url))

        <img src="{{asset('img/'.$joueur->url)}}" class="card-img-top" alt="...">
        @else

        <img src="{{$joueur->url}}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h3 class="card-title">Nom: {{$joueur->nom}}</h3>
            <h3 class="card-title">Prénom: {{$joueur->prenom}}</h3>
            <h3 class="card-title">Age: {{$joueur->age}}</h3>
            <h3 class="card-title">Tel: {{$joueur->telephone}}</h3>
            <h3 class="card-title">Email: {{$joueur->email}}</h3>
            <h3 class="card-title">Genre: {{$joueur->genre}}</h3>
            <h3 class="card-title">Origine: {{$joueur->pays}}</h3>
            <h3 class="card-title">Role: {{$joueur->role->nom}}</h3>
            <h3 class="card-title">Club: {{$joueur->equipe}}</h3>
            <a href="{{route('joueur.index')}}" class="btn btn-info">ALL JOUEUR</a>
        </div>
    </div>
@endsection


@endsection
