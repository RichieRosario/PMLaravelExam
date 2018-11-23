<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
      protected $fillable = [
        'title', 'description'
    ];


    	protected $attributes = [ 
    		'status' => 'Open'
    	];

    	 public function comments()
    {
        return $this->hasMany('App\Comment');
    }

      public function owner()
    {
        return $this->hasOne('App\User');
    }


}
