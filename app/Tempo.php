<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempo extends Model
{
    protected $fillable =['product_id','category_id','quantity','type','price'];

    public function category(){
        return $this->belongsTo('App\category');
    }
    public function product(){
        return $this->belongsTo('App\product');
    }
}
