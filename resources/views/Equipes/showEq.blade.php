@extends('template.welcome')
@section('content')
<div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Equipe</h5>
          <p class="card-text">ville : </p>
          <p class="card-text"> / </p>
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">prenom</th>
                    <th scope="col">role</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $dataEq as $item )
                    <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->prenom}}</td>
                    <td>{{$item->joueur}}</td>
                    <td><a href=""><button type="button" class="btn btn-primary">SHOW</button>
                    </a></td>
                    </tr>
                    @endforeach
             </tbody>
              </table>
    </div>
</div>

@endsection
