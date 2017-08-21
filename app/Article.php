<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $primaryKey = 'a_id';
    protected $fillable = ['a_article', 'a_publisher', 'a_title'];

    public function users() {



        return $this->belongsToMany('App\User', "article_user", "article_id", "user_id");
    }

}
