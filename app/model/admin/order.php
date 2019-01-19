<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
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
