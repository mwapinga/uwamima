<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
       protected $fillable =['name','product_id'];

         public function product(){
         return $this->belongsTo('App\model\admin\product');
      }

       public function size(){
         return $this->belongsToMany('App\model\admin\Size');
      }

}
