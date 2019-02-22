<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class ChairM extends Model
{
    protected $fillable = ['name','massage','photo_id'];

    public function photo(){
    	return $this->belongsTo('App\model\admin\Photo');
    }
}
