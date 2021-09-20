@extends('template.welcome')
@section('content')
<h1>EQUIPE REMPLIE</h1>

<section>
        <h2 class=" text-center my-3">Equipes remplies</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nom du Club</th>
              <th scope="col">Ville</th>
              <th scope="col">pays</th>
              <th scope="col">Nbr de joueurs</th>
              <th scope="col">Continent</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($dataEq as $equipe )
                  @if ($equipe->joueurs->count() ===$equipe->maxjoueur)

                  <tr>
                    <th scope="row">{{$equipe->id}}</th>
                    <td>{{$equipe->nom}}</td>
                    <td>{{$equipe->ville}}</td>
                    <td>{{$equipe->pays}}</td>
                    <td>{{$equipe->joueurs->count()}}/{{$equipe->nbrMax}}</td>
                  </tr>
                  @endif
              @endforeach

          </tbody>
        </table>
        <h1>EQUIPE REMPLIE</h1>

<section>
        <h2 class=" text-center my-3">Equipes nom remplies</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nom du Club</th>
              <th scope="col">Ville</th>
              <th scope="col">pays</th>
              <th scope="col">Nbr de joueurs</th>
              <th scope="col">Continent</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($dataEq as $equipe )
                  @if ($equipe->joueurs->count() < $equipe->maxjoueur)

                  <tr>
                    <th scope="row">{{$equipe->id}}</th>
                    <td>{{$equipe->nom}}</td>
                    <td>{{$equipe->ville}}</td>
                    <td>{{$equipe->pays}}</td>
                    <td>{{$equipe->joueurs->count()}}/{{$equipe->nbrMax}}</td>
                  </tr>
                  @endif
              @endforeach

          </tbody>
        </table>



    </section>
    <section>
            <h2 class=" text-center my-3">4 joueurs au hasard</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nom </th>
                  <th scope="col">prenom</th>
                  <th scope="col">age</th>
                  <th scope="col">telephone</th>
                  <th scope="col">email</th>
                  <th scope="col">genre</th>
                  <th scope="col">pays</th>
                  <th scope="col">role_id</th>
                  <th scope="col">equipe_id</th>
                </tr>
              </thead>
              <tbody>



                  @foreach ($joueurs as $joueur )

                      @if ($joueurs->equipe_id === null )

                      <tr>
                        <th scope="row">{{$joueur->id}}</th>
                        <td>{{$joueur->nom}}</td>
                        <td>{{$joueur->prenom}}</td>
                        <td>{{$joueur->age}}</td>
                        <td>{{$joueur->telephone}}</td>
                        <td>{{$joueur->email}}</td>
                        <td>{{$joueur->genre}}</td>
                        <td>{{$joueur->pays}}</td>
                        <td>{{$joueur->role_id}}</td>
                        <td>{{$joueur->equipe}}</td>
                        </tr>
                      @endif
                  @endforeach


              </tbody>
            </table>



        </section>
        <section>
                <h2 class=" text-center my-3">4 joueurs au hasard</h2>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nom </th>
                      <th scope="col">prenom</th>
                      <th scope="col">age</th>
                      <th scope="col">telephone</th>
                      <th scope="col">email</th>
                      <th scope="col">genre</th>
                      <th scope="col">pays</th>
                      <th scope="col">role_id</th>
                      <th scope="col">equipe_id</th>
                    </tr>
                  </thead>
                  <tbody>



                      @foreach ($joueurs as $joueur )

                          @if ($joueurs->equipe_id !== null )

                          <tr>
                            <th scope="row">{{$joueur->id}}</th>
                            <td>{{$joueur->nom}}</td>
                            <td>{{$joueur->prenom}}</td>
                            <td>{{$joueur->age}}</td>
                            <td>{{$joueur->telephone}}</td>
                            <td>{{$joueur->email}}</td>
                            <td>{{$joueur->genre}}</td>
                            <td>{{$joueur->pays}}</td>
                            <td>{{$joueur->role_id}}</td>
                            <td>{{$joueur->equipe}}</td>
                            </tr>
                          @endif
                      @endforeach


                  </tbody>
                </table>



            </section>
            <section>
                    <h2 class=" text-center my-3">equipe europe</h2>
                    <table class="table">
                      <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nom du Club</th>
                                <th scope="col">Ville</th>
                                <th scope="col">pays</th>
                                <th scope="col">Nbr de joueurs</th>
                                <th scope="col">Continent</th>
                            </tr>
                      </thead>
                      <tbody>



                          @foreach ($dataEq as $equipe )

                              @if ($equipe->equipe_id === 1)

                                   <tr>
                                    <th scope="row">{{$equipe->id}}</th>
                                    <td>{{$equipe->nom}}</td>
                                    <td>{{$equipe->ville}}</td>
                                    <td>{{$equipe->pays}}</td>
                                    <td>{{$equipe->joueurs->count()}}/{{$equipe->nbrMax}}</td>
                                  </tr>
                              @endif
                          @endforeach


                      </tbody>
                    </table>



                </section>
                <section>
                        <h2 class=" text-center my-3">equipe hors europe</h2>
                        <table class="table">
                          <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nom du Club</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">pays</th>
                                    <th scope="col">Nbr de joueurs</th>
                                    <th scope="col">Continent</th>
                                </tr>
                          </thead>
                          <tbody>



                              @foreach ($dataEq as $equipe )

                                  @if ($equipe->equipe_id !== 1)

                                       <tr>
                                        <th scope="row">{{$equipe->id}}</th>
                                        <td>{{$equipe->nom}}</td>
                                        <td>{{$equipe->ville}}</td>
                                        <td>{{$equipe->pays}}</td>
                                        <td>{{$equipe->joueurs->count()}}/{{$equipe->nbrMax}}</td>
                                      </tr>
                                  @endif
                              @endforeach


                          </tbody>
                        </table>



                    </section>
                    <section>
                            <h2 class=" text-center my-3">4 joueurs homme qui ont une equipe</h2>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Id</th>
                                  <th scope="col">Nom </th>
                                  <th scope="col">prenom</th>
                                  <th scope="col">age</th>
                                  <th scope="col">telephone</th>
                                  <th scope="col">email</th>
                                  <th scope="col">genre</th>
                                  <th scope="col">pays</th>
                                  <th scope="col">role_id</th>
                                  <th scope="col">equipe_id</th>
                                </tr>
                              </thead>
                              <tbody>



                                  @foreach ($joueurs as $joueur )

                                      @if ($joueurs->equipe_id !== null && $joueurs->genre === "homme")

                                      <tr>
                                        <th scope="row">{{$joueur->id}}</th>
                                        <td>{{$joueur->nom}}</td>
                                        <td>{{$joueur->prenom}}</td>
                                        <td>{{$joueur->age}}</td>
                                        <td>{{$joueur->telephone}}</td>
                                        <td>{{$joueur->email}}</td>
                                        <td>{{$joueur->genre}}</td>
                                        <td>{{$joueur->pays}}</td>
                                        <td>{{$joueur->role_id}}</td>
                                        <td>{{$joueur->equipe}}</td>
                                        </tr>
                                      @endif
                                  @endforeach


                              </tbody>
                            </table>



                        </section>



@endsection
