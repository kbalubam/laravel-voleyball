@extends('template.welcome')
@section('content')
<form action="{{route('storeE')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">nom</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ville</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="ville">
    </div><div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">pays</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="pays">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">maxjoueur</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="maxjoueur">
    </div>

    <select class="form-select" aria-label="Default select example" name="continent_id">
            <label for="exampleInputPassword1" class="form-label">maxjoueur</label>



    <option value="1">Europe</option>
    <option value="2">Afrique</option>
    <option value="3">Asie</option>
    <option value="4">Amerique</option>
    <option value="5">Oceanie</option>


    </select>


        <button type="submit" class="btn btn-primary">Submit</button>

  </form>

@endsection
