<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imports extends Model
{
    protected $fillable = [
        'carnumber','drivername','farmname','quantity','date','intime','outime','user_id','category_id','product_id',
    ] ;

    public function category(){
        return $this->belongsTo('App\category');
    }
    public function product(){
        return $this->belongsTo('App\product');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
