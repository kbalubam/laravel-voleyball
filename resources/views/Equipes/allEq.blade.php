@extends('template.welcome')
@section('content')
<h1>ALL equipes<a href="{{route('equipe.create')}}"><button type="button" class="btn btn-primary">Create</button>
</a>

</h1>
<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">ville</th>
            <th scope="col">pays</th>
            <th scope="col">maxjoueur</th>
            <th scope="col">continent</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dataEq as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nom}}</td>
                <td>{{$item->ville}}</td>
                <td>{{$item->pays}}</td>
                <td>{{count($item->joueurs)}} / {{$item->maxjoueur}}</td>
                <td>{{$item->continent}}</td>
                <td><a href="{{route('equipe.show', $item->id)}}"><button type="button" class="btn btn-primary">SHOW</button>
                </a></td>
                <td><a href="{{route('equipe.edit', $item->id )}}"><button type="button" class="btn btn-danger">EDIT</button>
                </a></td>
                <td>
                    <form action="{{route('equipe.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">DELETE</button>
                    </form>
                </td>
            </tr>

          @endforeach

        </tbody>
      </table>

@endsection
