<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class BlockPayout extends Model
{
    protected $fillable= ['block_id','Date','Name','amount'];

    public function block(){

    	return $this->belongsTo('App\model\admin\block');
    } 
}
