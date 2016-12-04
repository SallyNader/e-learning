<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey='t_id';
    protected $table='teachers';


    protected $fillable=['experience_years','path','profile_image','type_id','t_branch','t_email','t_experience','t_name','t_phone'];


    public function type(){


    	return $this->belongsTo('App\Type');
    }





    public function courses(){


    	return $this->hasMany('App\Course');
    }
}
