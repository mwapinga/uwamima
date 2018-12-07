<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email','role_id','password','phone','gender','borndate','adress','photo_id','status', 
    ];

    public function role(){
        return $this->belongsTo('App\role');
    }

     public function photo(){
        return $this->belongsTo('App\Photo');
    }

  public function block(){
        return $this->belongsTo('App\block');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
