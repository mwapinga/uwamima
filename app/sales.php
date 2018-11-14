<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $fillable = ['date','price','category_id','product_id','user_id','quantity','sold_to'];
    public function category(){
        return $this->belongsTo('App\category');
    }
    public function product(){
        return $this->belongsTo('App\product');
    }
    public function block(){
        return $this->belongsTo('App\block');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
