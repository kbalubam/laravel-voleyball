@extends('template.welcome')
@section('content')
<h1>ALL equipes <a href="{{route('create')}}"><button type="button" class="btn btn-primary">Create</button>
</a></h1>
<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">ville</th>
            <th scope="col">pays</th>
            <th scope="col">maxjoueur</th>
            {{-- <th scope="col">Att</th>
            <th scope="col">Mill</th>
            <th scope="col">Def</th>
            <th scope="col">remp</th> --}}
            <th scope="col">continent_id</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dataEq as $item )


            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nom}}</td>
                <td>{{$item->ville}}</td>
                <td>{{$item->pays}}</td>
                <td>{{$item->maxjoueur}}</td>
                {{-- @php
                    $a = 0;
                    $b =0;
                    $c = 0;
                    $d = 0;
                   foreach ($item->joueurs as $joueur ) {
                        if($joueur->role->nom === "att"){
                            $a++;
                        }elseif ($joueur->role->nom === "mill") {
                            $b++;
                        }elseif ($joueur->role->nom === "def") {
                            $c++;
                        }elseif ($joueur->role->nom === "remp") {
                            $d++;
                        }
                   }
                @endphp
                <td>{{$a}}</td>
                <td>{{$b}}</td>
                <td>{{$c}}</td>
                <td>{{$d}}</td> --}}
                <td>{{$item->continent_id}}</td>
                <td><a href="{{route('showE', $item->id)}}"><button type="button" class="btn btn-primary">SHOW</button>
                </a></td>
                <td><a href=""><button type="button" class="btn btn-danger">EDIT</button>
                </a></td>
                <td><a href=""><button type="button" class="btn btn-warning">DELETE</button>
                </a></td>
            </tr>

          @endforeach

        </tbody>
      </table>

@endsection
