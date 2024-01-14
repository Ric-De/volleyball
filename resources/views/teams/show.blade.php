@extends('layouts.template')

@section('title', 'Show ' . $team->name)

@section('content')
    <div class="flex items-center justify-center h-screen border-3 border-beige" style="background-image: url('{{ asset('images/showbackground.jpg') }}'); border-width: 30px; border-style: solid; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-center text-white"> 
            <h1 class="text-5xl font-extrabold mb-8">Team</h1> 

            <h1 class="text-3xl font-extrabold mb-4">2 x 2</h1> 

            <p class="mb-2 text-xl"><strong>Name: </strong>{{ $team->name }}</p> 
            <p class="mb-2 text-xl"><strong>Player Names: </strong>{{ $team->players_names }}</p> 
            <p class="mb-2 text-xl"><strong>City: </strong>{{ $team->city }}</p> 
            <p class="mb-2 text-xl"><strong>District: </strong>{{ $team->district }}</p> 
            <br>

            <a href="{{ route('teams.index', $team) }}" class="mb-4 inline-block">
                <button class="hover:bg-blue-600 bg-blue-500 text-white font-bold py-2 px-4 rounded">Back to Teams</button>
            </a>

            <br>
            <a href="{{ route('teams.edit', $team) }}" class="mb-4 inline-block ml-1cm">
                <button class="hover:bg-green-600 bg-green-500 text-white font-bold py-2 px-4 rounded">Edit Team</button>
            </a>

            <br>
            <form action="{{ route('teams.destroy', $team) }}" method="POST" class="inline-block ml-1cm"> 
                @method('delete')
                <button type="submit" class="hover:bg-red-600 bg-red-500 text-white font-bold py-2 px-4 rounded">Delete Team</button>
            </form>
        </div>
    </div>
@endsection


