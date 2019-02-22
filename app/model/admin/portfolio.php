<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = [
        'name','photo_id','status',
    ];

      public function photo(){
        return $this->belongsTo('App\model\admin\Photo');
    }
}
