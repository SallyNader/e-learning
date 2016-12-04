<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $primaryKey='b_id';

protected $fillable=['b_name','b_disc','b_cover'];

    public function images(){


    	return $this->hasMany('App\Image');
    }
}
