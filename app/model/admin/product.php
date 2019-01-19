<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name'];

      public function category(){
         return $this->hasMany('App\model\admin\category');
      }

         public function size(){
         return $this->belongsToMany('App\model\admin\Size');
      }
   
}
