<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comement extends Model
{
      protected $fillable = [
        'comment_body'
    ];




    	 public function task()
    {
        return $this->belongsTo('App\Task');
    }


         public function user()
    {
        return $this->belongsTo('App\User');
    }
}
