<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leaderboard;

class TeamController extends Controller
{
    // view all team
    public function index()
    {
        //
        $teams = Leaderboard::all();
        return view('admin.team-management.index',compact('teams'));
    }

    public function store(Request $request)
    {
        //
        // dd($request);
        $validated = $request->validate([
            'team_name' => 'required|max:255',
            'team_group' => 'required',
        ]);

        // Handle team icon image upload
        $team_icon_path = null;
        if($request->hasFile('team_icon_image')){
            $team_icon = $request->file('team_icon_image');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($team_icon->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'admin/img/team-icons/';
            $full_path = public_path($up_location);
            
            // Create directory if it doesn't exist
            if(!file_exists($full_path)){
                mkdir($full_path, 0755, true);
            }
            
            $team_icon_path = $up_location.$img_name;
            $team_icon->move($full_path, $img_name);
        }

        Leaderboard::insert([
            'team_name' => $request->team_name,
            'team_group' => $request->team_group,
            'team_icon_image' => $team_icon_path,
        ]);
        return Redirect()->back()->with('success','New Team Created Successfully');
      
    }

    /**
     * Show edit form for a team
     */
    public function edit(string $id)
    {
        $team = Leaderboard::find($id);
        if(!$team){
            return Redirect()->back()->with('success','Team not found');
        }
        return view('admin.team-management.edit', compact('team'));
    }

    /**
     * Update team information
     */
    public function update(Request $request, string $id)
    {
        $team = Leaderboard::find($id);
        if(!$team){
            return Redirect()->back()->with('success','Team not found');
        }

        $validated = $request->validate([
            'team_name' => 'required|max:255',
            'team_group' => 'required',
            'team_icon_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Handle new icon upload
        if($request->hasFile('team_icon_image')){
            // remove old image if exists
            $old_img = $team->team_icon_image;
            if($old_img && file_exists(public_path($old_img))){
                unlink(public_path($old_img));
            }

            $team_icon = $request->file('team_icon_image');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($team_icon->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'admin/img/team-icons/';
            $full_path = public_path($up_location);
            if(!file_exists($full_path)){
                mkdir($full_path, 0755, true);
            }
            $team_icon_path = $up_location.$img_name;
            $team_icon->move($full_path, $img_name);

            $team->team_icon_image = $team_icon_path;
        }

        $team->team_name = $request->team_name;
        $team->team_group = $request->team_group;
        $team->save();

        return Redirect()->route('admin.teams')->with('success','Team updated successfully');
    }


    //delete teams
    public function delete(string $id)
    {
        //
        $team = Leaderboard::find($id);
        if($team){
            $old_img = $team->team_icon_image;
            if($old_img && file_exists(public_path($old_img))){
                unlink(public_path($old_img));
            }
            $team->delete();
            return Redirect()->back()->with('success','Team Deleted Successfully');

        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }
    }

}
