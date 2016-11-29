<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $primaryKey='b_id';


    public function images(){


    	return $this->hasMany('App\Image');
    }
}
