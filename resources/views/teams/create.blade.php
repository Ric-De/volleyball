@extends('layouts.template')

@section('title', 'Create')

@section('content')
    <h1>This is the Create Teams Page</h1>

    
    <form action="{{route('teams.store')}}" method="POST">
        @csrf
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror

        <br>
        <label>
            Player Names:
            <br>
            <textarea name="players_names" rows="2">{{old('players_names')}}</textarea>
        </label>

        @error('players_names')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror

        <br>
        <label>
            City:
            <br>
            <input type="text" name="city" value="{{old('city')}}">
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
            <input type="text" name="district" value="{{old('district')}}">
        </label>

        @error('district')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror

        <br>
        
        <br>
        
        <button type="submit">Add Team</button>

    </form>

    <br>
    
    <form action="{{route('teams.index')}}" method="GET">
        <button type="submit">Back</button>
    </form>

@endsection