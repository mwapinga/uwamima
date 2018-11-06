<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instore extends Model
{
    protected $fillable = ['quantity'];

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
