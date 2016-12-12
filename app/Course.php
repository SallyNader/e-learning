<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
protected $primaryKey="c_id";


protected $fillable=['category_id','certificates','c_name','disc','image','price','syllabus','teacher_id','branch'];

    public function users(){



    	return $this->belongsToMany('App\User','course_user','course_id','user_id');
    }



public function teacher(){



	return $this->belongsTo('App\Teacher');
}




public function category(){


return $this->belongsTo('App\Category');


	
}




public function videos(){



	return $this->hasMany('App\Video');
}

}
