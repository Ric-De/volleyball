@extends('layouts.template')

@section('title', 'Create Game')

@section('content')
    <h1>This is the Create Games Page</h1>

    
    <form action="{{route('games.store')}}" method="POST">
        @csrf
        
    @php
        $teams = App\Models\Team::all();
    @endphp
 
        <label>
            Date:
            <br>
            <input type="date" name="date" value="{{old('date')}}">
        </label>

        @error('date')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror

        <br>
        <label>
            Time:
            <br>
            <input type="time" name="time" value="{{old('time')}}">
        </label>

        @error('time')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror


        <br>
        <label>
            Yellow Team:
            <br>
            <select name="yellow_team_id">
                <option value="" {{old('yellow_team_id') == "" ? 'selected' : ''}}>Select Yellow Team</option>
                @foreach($teams as $team)
                <option value='{{$team->id}}' {{old('yellow_team_id') == $team->id ? 'selected' : ''}}>
                {{$team->name}}</option>
                @endforeach
            </select>
            </label>

        @error('yellow_team_id')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror

        <br>
        <label>
            Blue Team:
            <br>
            <select name="blue_team_id">
                <option value="" {{old('blue') == "" ? 'selected' : ''}}>Select Blue Team</option>
                @foreach($teams as $team)
                <option value='{{$team->id}}' {{old('blue_team_id') == $team->id ? 'selected' : ''}}>
                {{$team->name}}</option>
                @endforeach
            </select>
            </label>

        @error('blue_team_id')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror
        <br>

        <label>
            Yellow Score:
            <br>
            <input type="number" name="yellow_score" value="{{old('yellow_score')}}" min='0' max='2' placeholder='score'> </label>

        @error('yellow_score')
        <br>
        <span>*{{$message}}</span>
        <br>    
        @enderror
        <br>

        <label>
            Blue Score:
            <br>
            <input type="number" name="blue_score" value="{{old('blue_score')}}" min='0' max='2' placeholder='score'> </label>

        @error('blue_score')
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