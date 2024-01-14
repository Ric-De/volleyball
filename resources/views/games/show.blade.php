@extends('layouts.template')

@section('title', 'Show Game'. $game->date)

@section('content')

    <h1>This is the Show View with all games. Game 'id'({{$game->id}})</h1>

    <p><strong>Game Date: </strong>{{$game->date}}</p>
    <p><strong>Game Time: </strong>{{$game->time}}</p>
    <p><strong>Yellow Team: </strong>{{$game->yellow->name }}</p>
    <p><strong>Blue Team: </strong>{{$game->blue->name }}</p>
    <p><strong>Yellow Team Score : </strong>{{$game->yellow_score }}</p>
    <p><strong>Blue Team Score : </strong>{{$game->blue_score }}</p>
    <br>

    <br>
    <a href="{{route('games.index', $game)}}"><button>Back to Games</button></a>
    <br>
    <br>
    
    <a href="{{route('games.edit', $game)}}"><button>Edit Game</button></a>
    <br>

    <br>
    <form action="{{route('games.destroy', $game)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete Game</button>
    </form>

@endsection