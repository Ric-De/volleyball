@extends('layouts.template')

@section('title', 'Edit')

@section('content')
    <h1>This is the Edit Teams Page</h1>

    
    <form action="{{ route('teams.update', $team) }}" method="POST">
        
        @csrf

        @method('put')

        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{$team->name}}">
        </label>

        @error('name')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror

        <br>
        <label>
            City:
            <br>
            <input type="text" name="city" value="{{$team->city}}">
        </label>

        @error('city')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror

        <br>
        <label>
            District:
            <br>
            <input type="text" name="district" value="{{$team->district}}">
        </label>

        @error('district')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror

        <br>
        <label>
            Player Names:
            <br>
            <textarea name="players_names" rows="2">{{$team->players_names}}</textarea>
        </label>
        <br>

        @error('players_names')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror
        <br>
        
        <br>
        <button type="submit">Update Team</button>
        
    </form>

    <br>

    <form action="{{route('teams.index')}}">
        <button type="submit">Back</button>
    </form>





@endsection