<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey='i_id';


    public function album(){


    	return $this->belongsTo('App\Album');
    }
}
