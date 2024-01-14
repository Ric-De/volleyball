@extends('layouts.template')

@section('title', 'Index Teams')

@section('content')

    <h1>This is the Index with all teams</h1>
    <br>
    <br>

    <table border="1" >
        <thead>
            <tr>
                <th>View Game</th>
                <th>Name</th>
                <th>Player Names</th>
                {{-- <th>City</th>
                <th>District</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td><a href="{{ route('teams.show', $team->id) }}"><button>View Team</button></a></td>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->players_names }}</td>
                    {{-- <td>{{ $team->city }}</td>
                    <td>{{ $team->district }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{ route('teams.create', $team) }}"><button>Create Team</button></a>
    <br>
    <br>

    <a href="{{ route('/') }}"><button>Back to Main View</button></a>
    <br>

@endsection