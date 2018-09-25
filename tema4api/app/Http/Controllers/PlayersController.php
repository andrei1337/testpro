<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
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

    public function showAllPlayers(){
        $players = Player::all();
        
        return json_encode($players);
    }

    public function showPlayer($id){
        $player = Player::find($id);

        return json_encode($player);
    }

    public function createPlayer(Request $request){
        $player = new Player();

        $player->name = $request->get('name');
        $player->salary = $request->get('salary');
        $player->save();

        return response()->json(['Player Created!'], 200);
    }

    public function updatePlayer(Request $request, $id){
        $player = Player::find($id);

        $player->name = $request->get('name');
        $player->salary = $request->get('salary');
        $player->save();

        return response()->json(['Player Updated!'], 200);
    }

    public function deletePlayer($id){
        $player = Player::find($id);
        $player->delete();

        return response()->json(['Player Deleted!'], 200);
    }
}
