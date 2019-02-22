<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $fillable = [
        'tags1','tags2','photo_id','status',
    ];

      public function photo(){
        return $this->belongsTo('App\model\admin\Photo');    }
}
