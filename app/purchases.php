<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{   
	protected $fillable = ['user_id','sales_id'];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function block(){
        return $this->belongsTo('App\block');
    }
    public function sales(){
        return $this->belongsTo('App\sales');
    }
}
