<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$teams = Team::all();
        $teams = Team::orderBy('name', 'asc')->get();
        return view("teams.index", compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("teams.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'district' => 'required',
            'players_names' => 'required'
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->city = $request->city;
        $team->district = $request->district;
        $team->players_names = $request->players_names;
        $team->save();

        return redirect()->route('teams.show', $team);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view("teams.show", compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view("teams.edit", compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'district' => 'required',
            'players_names' => 'required'
        ]);

        $team->name = $request->name;
        $team->city = $request->city;
        $team->district = $request->district;
        $team->players_names = $request->players_names;
        $team->save();

        return redirect()->route('teams.show', $team);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index');
    }
}
