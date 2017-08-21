<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $primaryKey = 'ca_id';
    protected $fillable = ["ca_name"];
    protected $table = 'categories';

    public function courses() {


        return $this->hasMany('App\Course');
    }

    public function offlines() {


        return $this->hasMany('App\Offline');
    }

}
