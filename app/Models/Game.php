<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /* use HasFactory; */

    protected $guarded = [];
    
    //Relation n:1
    public function yellow()
    {
        return $this->belongsTo('App\Models\Team', 'yellow_team_id');
        /* return $this->belongsTo(Team::class, 'yellow_team_id'); */

    } 
    //Relation n:1
    public function blue()
    {
        return $this->belongsTo('App\Models\Team', 'blue_team_id');
        /* return $this->belongsTo(Team::class, 'blue_team_id'); */
    }
}
