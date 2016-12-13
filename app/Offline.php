<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offline extends Model
{
   protected $primaryKey="c_id";

   protected $fillable=['category_id','certificates','c_name','disc','image','price','syllabus','teacher_id','branch','startDate','startClock','endClock','branchTelephone'];










public function teacher(){



	return $this->belongsTo('App\Teacher');
}




public function category(){


return $this->belongsTo('App\Category');


	
}
   

}
