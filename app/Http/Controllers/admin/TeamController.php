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
        $teams = LeaderBoard::all();
        return view('admin.team-management.index',compact('teams'));
    }

    public function store(Request $request)
    {
        //
        // dd($request);
        $validated = $request->validate([
            'team_name' => 'required|max:255',
            'team_group' => 'required',

        ]
        );

        // ============== without resizing system =======
        // $category_img = $request->file('category_img');
        // $last_img = '';
        // if($category_img){
        //     $name_gen = hexdec(uniqid());
        //     $img_ext = strtolower($category_img->getClientOriginalExtension());
        //     $img_name = $name_gen . '.' . $img_ext;
        //     $up_location = 'admin/img/blog-category/';
        //     $last_img = $up_location.$img_name;
        //     $category_img->move($up_location,$img_name);

        // }


        

        Leaderboard::insert([
            'team_name' => $request->team_name,
            'team_group' => $request->team_group,
        ]);
        return Redirect()->back()->with('success','New Team Created Successfully');
      
    }


    //delete teams
    public function delete(string $id)
    {
        //
        $team = Leaderboard::find($id);
        if($team){
            // $old_img = $category->category_img;
            // if($old_img){
            //     unlink($old_img);

            // }
            $team->delete();
            return Redirect()->back()->with('success','Team Deleted Successfully');

        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }
    }

}
