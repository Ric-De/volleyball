<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /* use HasFactory; */

    //Relation 1:n
    public function games(){
        return $this->hasMany('App\Models\Game');
        /* return $this->hasMany(Game::class); */
    }
}
