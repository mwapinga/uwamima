<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $fillable = ['size_id','date','price','category_id','product_id','user_id','quantity','sold_to'];

       public function category(){
        return $this->belongsTo('App\model\admin\category');
    }
    public function product(){
        return $this->belongsTo('App\model\admin\product');
    }
    public function user(){
        return $this->belongsTo('App\model\admin\User');
    }
    public function size(){
        return $this->belongsTo('App\model\admin\Size');
    }


}
