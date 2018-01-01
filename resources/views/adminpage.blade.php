@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container22">
        <h2>Movies on database</h2>
        <fieldset class="addmin">
            <form id="SearchForm">
                <input type="text" class="form-control" id="searchText" placeholder="Search Movie">
            </form>                 
            <div class= "MoviesSystem">
               <div>
                    <button class="button11" onclick = "ConectMoviesSalas()"> Connect</button>
                    <select required id = "id_movie">
                        @foreach($movies as $movie1)
                            <option name="idMovie" value = "{{$movie1->IdMovie}}">{{ $movie1->TitleMovie}}</option>
                        @endforeach 
                    </select>
                    <select required id = "id_sala">
                        @foreach($salas as $sala)
                            <option name = "idRoom" value= "{{$sala->id}}">{{ $sala->sala_nome}}</option>
                        @endforeach
                    </select>                   
                </div>
                <hr>
                <h2>Deletar Filmes</h2>
                <ol class="ola">
                    @foreach($movies as $movie)
                        <li class="exp">
                            <button onclick="deleteMovie('{{$movie->IdMovie}}')" class= "btn btn-primary" href="javascript:void(0)">DELETE Movie</button>
                            <u>{{ $movie->TitleMovie}}</u>
                        </li>
                    @endforeach
                </ol>
                <br>
            </div> 
            <div>
                 <hr>
                <h2>Filmes - Salas</h2>
                <ol class="ola1">
                    @foreach($movies as $movie)
                        <br>
                        <li class="exp1">
                        <button onclick="LimpaSala('{{$movie->salas_id}}')" class= "btn btn-primary" href="javascript:void(0)">Limpar Sala</button>
                        <span class="titulasala">{{$movie->TitleMovie}}</span> - Sala:  <b>{{$movie->salas_id}}</b>
                        </li>
                    @endforeach
                    </ol>
            </div>
            <hr>
            <br> <br>
            <div class="listMovie11">
                <div class="container">
                    <div id="showMovies"></div>
                </div>
            </div>
        </fieldset>

</div>
</div>

@endsection

@section('jscall')
<script type="text/javascript" src="{{ URL::asset('js/adminjs.js') }}"></script>
@endsection