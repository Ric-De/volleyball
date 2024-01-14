@extends('layouts.template')

@section('title', 'show ' . $team->name)

@section('content')

    <h1>This is the Show Teams Page. Team 'id'({{$team->id}}) related to name: {{$team->name}}</h1>

    <h1>Team: {{$team->name}}</h1>
    
    <p><strong>Name: </strong>{{$team->name}}</p>
    <p><strong>Player Names: </strong>{{$team->players_names}}</p>
    <p><strong>City: </strong>{{$team->city}}</p>
    <p><strong>District: </strong>{{$team->district}}</p>
    <br>
    <br>
    <a href="{{route('teams.index', $team)}}"><button>Back to Teams</button></a>
    <br>
    <br>
    <a href="{{route('teams.edit', $team)}}"><button>Edit Team</button></a>
    <br>

    <br>
    <form action="{{route('teams.destroy', $team)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete Team</button>
    </form>

  
@endsection