<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Dota2PlayerInfo;

class Dota2PlayerControllerAPI extends Controller
{
    public function index()
    {
        $players = Dota2PlayerInfo::all();

        return response()->json(['players'=>$players],200);

    }


}
