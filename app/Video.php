<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
   

   protected $primaryKey='v_id';

protected $fillable=['course_id','duration','startDate','v_disc','v_name','v_path'];
   public function course(){


   	return $this->belongsTo('App\Course');
   }
}
