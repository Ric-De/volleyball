@extends('layouts.template')

@section('title', 'Home')

@section('content')
    <h1>This is the Main Page of the Website</h1>

    <a href="{{route('teams.index')}}"><button>Manage Teams</button></a>
    <br>
    <br>
    <a href="{{route('games.index')}}"><button>Manage Games</button></a>
    <br>
    <br>

@endsection