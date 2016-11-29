<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
   

   protected $primaryKey='v_id';


   public function course(){


   	return $this->belongsTo('App\Course');
   }
}
