<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productPhoto extends Model
{
    protected $fillable = ['product_id','filename'];
}
