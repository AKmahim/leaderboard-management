<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leaderboard;

class FrontendController extends Controller
{
    //index page controller 
    public function Index(){
        $teams_a = Leaderboard::where('team_group','A')
        ->orderBy('win', 'desc')
        ->orderBy('points', 'desc')
        ->get();

        $teams_b = Leaderboard::where('team_group','B')
        ->orderBy('win', 'desc')
        ->orderBy('points', 'desc')
        ->get();


        return view('client-side.index',compact('teams_a','teams_b'));
    }

   
    
}
