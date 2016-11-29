<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $primaryKey='t_id';


    public function teacher(){


    	return $this->hasMany('App\Teacher');
    }
}
