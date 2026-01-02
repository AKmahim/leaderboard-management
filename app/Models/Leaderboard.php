<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_name',
        'team_icon_image',
        'team_group',
        'match_played',
        'win',
        'draw',
        'lose',
        'points',
        'points_plus_min',
    ];
}
