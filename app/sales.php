<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $fillable = ['date','price',];
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
