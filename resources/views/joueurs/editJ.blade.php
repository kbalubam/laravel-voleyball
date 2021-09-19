@extends('template.welcome')
@section('content')
<form action="{{route('joueur.update',$joueur->id)}}" method="POST">
    @method('PUT')
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">NOM</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Prenom</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
    </div><div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">age</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="age">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telephone</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="telephone">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="Email">
        </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Genre</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="genre">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">pays</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="pays">
    </div>

    <select class="form-select" aria-label="Default select example" name="continent_id">
    <label for="exampleInputPassword1" class="form-label">maxjoueur</label>
    @foreach ($continents as $continent)
    <option value="{{$continent->id}}">{{$continent->nom}}</option>
    @endforeach

    <select class="form-select" aria-label="Default select example" name="role_id">
    <label for="exampleInputPassword1" class="form-label">maxjoueur</label>
    @foreach ($roles as $role)
    <option value="{{$role->id}}">{{$role->nom}}</option>
    @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>

  </form>

@endsection
