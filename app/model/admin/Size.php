<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['size','category_id'];

    public function category(){
        return $this->belongsToMany('App\model\admin\category');
    }
    public function product(){
        return $this->belongsToMany('App\model\admin\product');
    }
}
