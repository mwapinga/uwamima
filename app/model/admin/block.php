<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class block extends Model
{

    protected $fillable = [
        'name', 'Area','blockFee'
    ];

   public function users()
     {
        return $this->belongsToMany('App\model\admin\User');
    }
 }
