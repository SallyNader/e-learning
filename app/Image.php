<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    protected $primaryKey = 'i_id';
    protected $fillable = ['album_id', 'i_disc', 'i_name', 'path'];

    public function album() {


        return $this->belongsTo('App\Album');
    }

}
