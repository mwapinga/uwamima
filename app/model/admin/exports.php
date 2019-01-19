<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class exports extends Model
{
    protected $fillable = [
        'size_id','carnumber','drivername','farmname','quantity','date','intime','outime','user_id','product_id','category_id',
    ] ;
    public function category(){
        return $this->belongsTo('App\model\admin\category');
    }
    public function product(){
        return $this->belongsTo('App\model\admin\product');
    }
     public function size(){
        return $this->belongsTo('App\model\admin\Size');
    }
    public function user(){
        return $this->belongsTo('App\model\admin\User');
    }
}
