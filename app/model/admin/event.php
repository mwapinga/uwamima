<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = [
        'name','date','details','status','photo_id',
    ];

      public function photo(){
        return $this->belongsTo('App\model\admin\Photo');
    }
}
