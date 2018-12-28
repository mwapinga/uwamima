<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class block extends Model
{

    protected $fillable = [
        'name', 'Area','blockFee'
    ];

   public function users()
     {
        return $this->belongsToMany('App\User');
    }
 }
