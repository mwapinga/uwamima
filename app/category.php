<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
       protected $fillable =['name','product_id'];

         public function products(){
         return $this->belongs_to('App\product');
      }

}
