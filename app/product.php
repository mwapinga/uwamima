<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name'];

      public function category(){
         return $this->has_many('App\category');
      }
   
}
