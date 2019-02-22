<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['product_id','category_id','size_id','quantity','price'];

    public function product(){
    	return $this->belongsTo('App\model\admin\product');
    }
     public function category(){
    	return $this->belongsTo('App\model\admin\category');
    }
      public function size(){
    	return $this->belongsTo('App\model\admin\size');
    }
}
