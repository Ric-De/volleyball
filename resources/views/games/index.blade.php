@extends('layouts.template')

@section('title', 'Index Games')

@section('content')
    <div class="flex items-center justify-center h-screen border-3 border-beige" style="background-image: url('{{ asset('images/indexbackground.jpg') }}'); border-width: 30px; border-style: solid; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-center text-black">
            <h1 class="text-4xl font-extrabold mb-8">Current Game List</h1>

            <table class="border-collapse border-2 border-black text-black">
                <thead>
                    <tr>
                        <th class="border border-black px-4 py-2">View Game</th>
                        <th class="border border-black px-4 py-2">Date</th>
                        <th class="border border-black px-4 py-2">Time</th>
                        <th class="border border-black px-4 py-2">Teams</th>
                        <th class="border border-black px-4 py-2">Scores</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                        <tr>
                            <td class="border border-black px-4 py-2"><a href="{{ route('games.show', $game->id) }}" class="hover:underline"><button class="hover:bg-gray-800 bg-gray-700 text-white font-bold py-2 px-4 rounded">View Game</button></a></td>
                            <td class="border border-black px-4 py-2">{{ $game->date }}</td>
                            <td class="border border-black px-4 py-2">{{ $game->time }}</td>
                            <td class="border border-black px-4 py-2">
                                {{ $game->yellow->name }} X {{ $game->blue->name }}
                            </td>
                            <td class="border border-black px-4 py-2">
                                {{ $game->yellow_score }} - {{ $game->blue_score }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <br>

            <a href="{{ route('games.create', $game) }}" class="mb-4">
                <button class="hover:bg-green-600 bg-green-500 text-white font-bold py-2 px-4 rounded">Create Game</button>
            </a>
            <br>
            <br>

            <a href="{{ route('/') }}" class="mb-4">
                <button class="hover:bg-blue-600 bg-blue-500 text-white font-bold py-2 px-4 rounded">Back to Main View</button>
            </a>
        </div>
    </div>
@endsection

