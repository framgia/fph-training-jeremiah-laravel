<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    public function words(){
    	return $this->hasMany('App\Word');
    }
}
