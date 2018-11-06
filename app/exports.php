<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exports extends Model
{
    protected $fillable = [
        'carnumber','drivername','quantity','date','intime','outime',
    ] ;
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
