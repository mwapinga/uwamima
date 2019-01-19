<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{   
	protected $fillable = ['user_id','sales_id'];
    public function user(){
        return $this->belongsTo('App\model\admin\User');
    }

    public function block(){
        return $this->belongsTo('App\model\admin\block');
    }
    public function sales(){
        return $this->belongsTo('App\model\admin\sales');
    }
}