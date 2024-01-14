@extends('layouts.template')

@section('title', 'Edit')

@section('content')
    <div class="flex items-center justify-center h-screen border-3 border-beige" style="background-image: url('{{ asset('images/editcreatebackground.jpg') }}'); border-width: 30px; border-style: solid; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-center text-white">
            <h1 class="text-5xl font-extrabold mb-8">Edit Teams Page</h1>

            <form action="{{ route('teams.update', $team) }}" method="POST" class="text-left">
                @csrf
                @method('put')

                <label class="mb-4">
                    Name:
                    <br>
                    <input type="text" name="name" value="{{ $team->name }}" class="py-2 px-4 rounded bg-gray-200 text-black">
                </label>

                @error('name')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror

                <br>
                <label class="mb-4">
                    City:
                    <br>
                    <input type="text" name="city" value="{{ $team->city }}" class="py-2 px-4 rounded bg-gray-200 text-black">
                </label>

                @error('city')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror

                <br>
                <label class="mb-4">
                    District:
                    <br>
                    <input type="text" name="district" value="{{ $team->district }}" class="py-2 px-4 rounded bg-gray-200 text-black">
                </label>

                @error('district')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror

                <br>
                <label class="mb-4">
                    Player Names:
                    <br>
                    <textarea name="players_names" rows="2" class="py-2 px-4 rounded bg-gray-200 text-black">{{ $team->players_names }}</textarea>
                </label>

                @error('players_names')
                    <span class="text-red-500">*{{ $message }}</span>
                @enderror

                <br>
                <br>
                <button type="submit" class="hover:bg-blue-600 bg-blue-500 text-white font-bold py-2 px-4 rounded">Update Team</button>
            </form>

            <br>

            <form action="{{ route('teams.index') }}">
                <button type="submit" class="hover:bg-green-600 bg-green-500 text-white font-bold py-2 px-4 rounded">Back</button>
            </form>
        </div>
    </div>
@endsection
