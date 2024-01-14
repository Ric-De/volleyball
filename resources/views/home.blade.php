@extends('layouts.template')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col items-center justify-center h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/homebackground.jpg') }}');">
        <h1 class="text-6xl font-extrabold mb-8 text-black" style="font-family: 'YourChosenFont', sans-serif;">Beach Volleyball Tournament Manager</h1>

        <a href="{{ route('teams.index') }}" class="mb-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Manage Teams</button>
        </a>

        <a href="{{ route('games.index') }}">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Manage Games</button>
        </a>
    </div>
@endsection
