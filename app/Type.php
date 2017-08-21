<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

    protected $primaryKey = 't_id';
    protected $fillable = ['t_title'];

    public function teacher() {


        return $this->hasMany('App\Teacher');
    }

}
