@extends('layouts.template')

@section('title', 'Edit Game')

@section('content')
    <div class="flex items-center justify-center h-screen border-3 border-beige" style="background-image: url('{{ asset('images/editcreatebackground.jpg') }}'); border-width: 30px; border-style: solid; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-center text-white">
            <h1 class="text-5xl font-extrabold mb-8">Edit Games Page</h1>

            <form action="{{ route('games.update', $game) }}" method="POST" class="text-left">
                @csrf

                @php
                    $teams = App\Models\Team::all();
                @endphp

                @method('PUT')

                <label class="mb-4">
                    Date:
                    <br>
                    <input type="date" name="date" value="{{ old('date', $game->date) }}" class="py-2 px-4 rounded bg-gray-200 text-black">
                </label>

                @error('date')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror

                <br>
                <label class="mb-4">
                    Time:
                    <br>
                    <input type="time" name="time" value="{{ old('time', $game->time) }}" class="py-2 px-4 rounded bg-gray-200 text-black">
                </label>

                @error('time')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror

                <br>
                <label class="mb-4">
                    Yellow Team:
                    <br>
                    <select name="yellow_team_id" class="py-2 px-4 rounded bg-gray-200 text-black">
                        <option value="" {{ old('yellow_team_id', $game->yellow_team_id) == "" ? 'selected' : '' }}>Select Yellow Team</option>
                        @foreach ($teams as $team)
                            <option value='{{ $team->id }}' {{ old('yellow_team_id', $game->yellow_team_id) == $team->id ? 'selected' : '' }}>
                                {{ $team->name }}</option>
                        @endforeach
                    </select>
                </label>

                @error('yellow_team_id')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror

                <br>
                <label class="mb-4">
                    Blue Team:
                    <br>
                    <select name="blue_team_id" class="py-2 px-4 rounded bg-gray-200 text-black">
                        <option value="" {{ old('blue_team_id', $game->blue_team_id) == "" ? 'selected' : '' }}>Select Blue Team</option>
                        @foreach ($teams as $team)
                            <option value='{{ $team->id }}' {{ old('blue_team_id', $game->blue_team_id) == $team->id ? 'selected' : '' }}>
                                {{ $team->name }}</option>
                        @endforeach
                    </select>
                </label>

                @error('blue_team_id')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror
                <br>

                <label class="mb-4">
                    Yellow Score:
                    <br>
                    <input type="number" name="yellow_score" value="{{ old('yellow_score', $game->yellow_score) }}" min='0' max='2'
                        placeholder='score' class="py-2 px-4 rounded bg-gray-200 text-black">
                </label>

                @error('yellow_score')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror
                <br>

                <label class="mb-4">
                    Blue Score:
                    <br>
                    <input type="number" name="blue_score" value="{{ old('blue_score', $game->blue_score) }}" min='0' max='2'
                        placeholder='score' class="py-2 px-4 rounded bg-gray-200 text-black">
                </label>

                @error('blue_score')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror
                <br>

                <br>
                <button type="submit" class="hover:bg-green-600 bg-green-500 text-white font-bold py-2 px-4 rounded">Update Team</button>
            </form>

            <form action="{{ route('games.index') }}" method="GET">
                <button type="submit" class="hover:bg-blue-600 bg-blue-500 text-white font-bold py-2 px-4 rounded">Back</button>
            </form>
        </div>
    </div>
@endsection
