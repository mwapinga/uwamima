<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class block extends Model
{

    protected $fillable = [
        'name','user_id', 'Area',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
 }
