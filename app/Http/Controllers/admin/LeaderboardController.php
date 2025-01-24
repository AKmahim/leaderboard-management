<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leaderboard;

class LeaderboardController extends Controller
{

    // ========================= frontend controller =======================
    public function FrontendViewTeamA(){
        $teams = Leaderboard::where('team_group','A')
        ->orderBy('win', 'desc')
        ->orderBy('points_plus_min', 'desc')
        ->get();

        return response()->json([
            'status' => true,
            'message' => 'Data fetch successfully',
            'data' => $teams,
        ]);
    }
    public function FrontendViewTeamB(){
        $teams = Leaderboard::where('team_group','B')
        ->orderBy('win', 'desc')
        ->orderBy('points_plus_min', 'desc')
        ->get();

        return response()->json([
            'status' => true,
            'message' => 'Data fetch successfully',
            'data' => $teams,
        ]);
    }

    // leaderboard view for group A
    public function ViewTeamA(){
        $teams = Leaderboard::where('team_group','A')
        ->orderBy('win', 'desc')
        ->orderBy('points_plus_min', 'desc')
        ->get();
        return view('admin.leaderboard.leaderboard-a',compact('teams'));

    }
    // leaderboard view for group A
    public function ViewTeamB(){
        $teams = Leaderboard::where('team_group','B')
        ->orderBy('win', 'desc')
        ->orderBy('points_plus_min', 'desc')
        ->get();
        return view('admin.leaderboard.leaderboard-b',compact('teams'));

    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $team = Leaderboard::find($id);
        return view('admin.leaderboard.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $team = Leaderboard::find($id);
        $validated = $request->validate([
            'match_played' => 'required',
            'win' => 'required',
            'lose' => 'required',
            'points' => 'required',
            'points_plus_min' => 'required',

        ]
        );

        $team->update([
            'match_played' => $request->match_played,
            'win' => $request->win,
            'lose' => $request->lose,
            'points' => $request->points,
            'points_plus_min' => $request->points_plus_min,

        ]);
        return Redirect()->back()->with('success','Team Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
