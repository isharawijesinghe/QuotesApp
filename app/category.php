<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
   public  function nice_actions(){
       return $this->belongsToMany('App\NiceAction','categories_nice_actions');
   }
}
