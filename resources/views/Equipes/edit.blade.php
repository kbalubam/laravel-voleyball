@extends('template.welcome')

@section('content')
    <h1>Modifier Equipe</h1>
    <br>
    <form action="{{route('equipe.update', $equipe->id)}}" method="post">
        @csrf
        @method('PUT')
        Nom du Club: <input type="text" name="nom" value="{{$equipe->nomClub}}">
        Ville: <input type="text" name="ville" value="{{$equipe->ville}}">
        Pays: <input type="text" name="pays" value="{{$equipe->pays}}">
        Nombre Max: <input type="text" name="maxjoueur" value="{{$equipe->nbrMax}}">
        continent_ID: <select class="form-select" aria-label="Default select example" name="continent_id">



        @foreach ($continents as $continent)

        <option value="{{$continent->id}}">{{$continent->nom}}</option>
        @endforeach
        <button type="button" class="btn btn-primary">Primary</button>

    </form>
@endsection
