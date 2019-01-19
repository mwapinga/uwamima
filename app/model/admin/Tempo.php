<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Tempo extends Model
{
    protected $fillable =['size_id','product_id','category_id','quantity','type','price'];

    public function category(){
        return $this->belongsTo('App\model\admin\category');
    }
    public function product(){
        return $this->belongsTo('App\model\admin\product');
    }
      public function size(){
        return $this->belongsTo('App\model\admin\Size');
    }
}
