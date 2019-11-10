<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentarmodel extends Model
{
    protected $table = "komentar_posts";

    public function users(){
      return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function posts(){
      return $this->belongsTo('App\model1', 'post_id', 'id');
    }
}
