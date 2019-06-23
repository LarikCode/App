<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function  first_team(){
        return $this->belongsTo('App\Team', 'first_team_id','id');
    }
    public function  second_team(){
        return $this->belongsTo('App\Team', 'second_team_id','id');
    }
    public function  tournament(){
        return $this->belongsTo('App\Tournament', 'tournament_id','id');
    }
}
