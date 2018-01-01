@extends('layouts.app')

@section('content')

<div id="slider">  
        <figure>  
        @foreach($movies as $movie)
        <li><img src= {{$movie -> UrlMovie}} ></li>
        @endforeach  
        </figure>        
    </div>
</div>  
<br>


<br>

<div class="listMovie1">
<h1>Cartaz</h1>
<ul>
    @foreach($movies as $movie)
    <li>
        <a href="movieinfo/{{ $movie-> IdMovie }}"><img src= {{$movie -> UrlMovie}} ></a>
        <h4>{{$movie -> TitleMovie}}</h4>
        <br><br><br><br><br>  
    </li>
    @endforeach  

</ul>
</div>
      
        
<div >
    <div id="showMovies" class = "row"></div>
</div>

@endsection