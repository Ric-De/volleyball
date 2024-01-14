@extends('layouts.template')

@section('title', 'Show Game ' . $game->date)

@section('content')
    <div class="flex items-center justify-center h-screen border-3 border-beige" style="background-image: url('{{ asset('images/showbackground.jpg') }}'); border-width: 30px; border-style: solid; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-center text-white">
            <h1 class="text-4xl font-extrabold mb-8">Game Details</h1>

            <p><strong>Game Date: </strong>{{ $game->date }}</p>
            <p><strong>Game Time: </strong>{{ $game->time }}</p>
            <p><strong>Teams: </strong>{{ $game->yellow->name }} X {{ $game->blue->name }}</p>
            <p><strong>Scores: </strong>{{ $game->yellow_score }} - {{ $game->blue_score }}</p>

            <br>

            <a href="{{ route('games.index', $game) }}" class="mb-4">
                <button class="hover:bg-blue-600 bg-blue-500 text-white font-bold py-2 px-4 rounded">Back to Games</button>
            </a>

            <br>
            <br>

            <a href="{{ route('games.edit', $game) }}" class="mb-4 inline-block ml-1cm">
                <button class="hover:bg-green-600 bg-green-500 text-white font-bold py-2 px-4 rounded">Edit Game</button>
            </a>

            <br>

            <form action="{{ route('games.destroy', $game) }}" method="POST" class="inline-block ml-1cm">
                @csrf
                @method('delete')
                <button type="submit" class="hover:bg-red-600 bg-red-500 text-white font-bold py-2 px-4 rounded">Delete Game</button>
            </form>
        </div>
    </div>
@endsection

