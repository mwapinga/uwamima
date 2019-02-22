<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'header','Body','status','user_id','photo_id',
     ];
     // protected $dates = [
     //   'date'
     // ];

    public function photo(){
      return $this->belongsTo('App\model\admin\Photo');
  }

    public function user(){
      return $this->belongsTo('App\model\admin\User');
  }
  public function comments(){
    return $this->hasMany('App\model\admin\Comment');
 }

}
