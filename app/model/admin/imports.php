<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class imports extends Model
{
    protected $fillable = [
        'carnumber','drivername','farmname','quantity','date','intime','outime','user_id','category_id','product_id','size_id'
    ] ;

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
