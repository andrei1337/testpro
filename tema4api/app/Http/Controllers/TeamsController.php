<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function showAllTeams(){
        $teams = Team::all();
        
        return json_encode($teams);
    }

    public function showTeam($id){
        $team = Team::find($id);

        return json_encode($team);
    }

    public function createTeam(Request $request){
        $team = new Team();

        $team->name = $request->get('name');
        $team->teamLocation = $request->get('teamLocation');
        $team->save();

        return response()->json(['Team Created!'], 200);
    }

    public function updateTeam(Request $request, $id){
        $team = Team::find($id);

        $team->name = $request->get('name');
        $team->teamLocation = $request->get('teamLocation');
        $team->save();

        return response()->json(['Team Updated!'], 200);
    }

    public function deleteTeam($id){
        $team = Team::find($id);
        $team->delete();

        return response()->json(['Team Deleted!'], 200);
    }
}
