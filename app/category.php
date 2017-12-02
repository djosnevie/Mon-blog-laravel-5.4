<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function Post(){

    	return $this->hasMany('App\Post');
    }

}
