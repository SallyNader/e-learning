<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey='t_id';
    protected $table='teachers';


    public function type(){


    	return $this->belongsTo('App\Type');
    }





    public function courses(){


    	return $this->hasMany('App\Course');
    }
}
