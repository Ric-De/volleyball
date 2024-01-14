@extends('layouts.template')

@section('title', 'Index Teams')

@section('content')
    <div class="flex items-center justify-center h-screen border-3 border-beige" style="background-image: url('{{ asset('images/indexbackground.jpg') }}'); border-width: 30px; border-style: solid; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-center text-brown">
            <h1 class="text-4xl font-extrabold mb-8">Current Team List</h1>

            <table class="border-collapse border-2 border-white text-brown">
                <thead>
                    <tr>
                        <th class="border border-white px-4 py-2">View Team</th>
                        <th class="border border-white px-4 py-2">Name</th>
                        <th class="border border-white px-4 py-2">Player Names</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td class="border border-white px-4 py-2"><a href="{{ route('teams.show', $team->id) }}" class="hover:underline"><button class="hover:bg-gray-800 bg-gray-700 text-white font-bold py-2 px-4 rounded">View Team</button></a></td>
                            <td class="border border-white px-4 py-2">{{ $team->name }}</td>
                            <td class="border border-white px-4 py-2">{{ $team->players_names }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>

            <a href="{{ route('teams.create', $team) }}" class="mb-4">
                <button class="hover:bg-green-600 bg-green-500 text-white font-bold py-2 px-4 rounded">Create Team</button>
            </a>

            <br>
            <br>

            <a href="{{ route('/') }}" class="mb-4">
                <button class="hover:bg-blue-600 bg-blue-500 text-white font-bold py-2 px-4 rounded">Back to Main View</button>
            </a>
        </div>
    </div>
@endsection



