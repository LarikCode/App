<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players(){
        return $this->hasMany('App\Player');
    }
    public function games(){
        return $this->hasMany('App\Game');
    }
    public function tournaments(){
        return $this->belongsToMany('App\Tournament');
    }
}
