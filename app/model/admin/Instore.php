<?php
namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Instore extends Model
{
    protected $fillable = ['product_id','category_id','size_id','quantity' ,'type','trans_id'];

    public function category(){
        return $this->belongsTo('App\model\admin\category');
    }
    public function product(){
        return $this->belongsTo('App\model\admin\product');
    }
      public function size(){
        return $this->belongsTo('App\model\admin\Size');
    }

        public function import(){
        return $this->belongsTo('App\model\admin\import','trans_id');
    }
        public function export(){
        return $this->belongsTo('App\model\admin\export','trans_id');
    }

}
