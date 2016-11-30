<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
protected $primaryKey="c_id";

    public function users(){



    	return $this->belongsToMany('App\User','course_user','course_id','user_id');
    }



public function teacher(){



	return $this->belongsTo('App\Teacher');
}




public function category(){


return $this->hasOne('App\Category');


	
}




public function videos(){



	return $this->hasMany('App\Video');
}

}
