@extends('layouts.template')

@section('title', 'Index Games')

@section('content')

    <h1>This is the Index with all games</h1>
    <br>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>View Game</th>
                <th>Date</th>
                <th>Time</th>
                <th>Yellow Team</th>
                <th>Blue Team</th>
                <th>Yellow Score</th>
                <th>Blue Score</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td><a href="{{ route('games.show', $game->id) }}"><button>View Game</button></a></td>
                    <td>{{ $game->date }}</td>
                    <td>{{ $game->time }}</td>
                    <td>{{ $game->yellow->name }}</td>
                    <td>{{ $game->blue->name }}</td>
                    <td>{{ $game->yellow_score }}</td>
                    <td>{{ $game->blue_score }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ route('games.create', $game) }}"><button>Create Game</button></a>
    <br>

    <br>
    <a href="{{ route('/') }}"><button>Back to Main View</button></a>
    <br>

@endsection