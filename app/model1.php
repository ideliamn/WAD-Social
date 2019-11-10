<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model1 extends Model
{
    
    protected $table = "posts";
  

    public function users(){
      return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function komentar_post(){
      return $this->hasMany('App\komentarmodel', 'post_id', 'id');
    }

}
