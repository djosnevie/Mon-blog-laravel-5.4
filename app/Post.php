<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=["name","content", "slug", "category_id"];

    public function category(){

    	return $this->belongsTo('App\category');
    }

}
