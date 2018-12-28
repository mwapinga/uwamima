<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{   

      // roles(), hasRole($name), hasPermission($permission), isAbleTo($permission), can($permission), and ability($roles, $permissions, $options) 



    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email','role_id','password','phone','gender','borndate','adress','photo_id','status','block_id', 
    ];

     public function photo(){
        return $this->belongsTo('App\Photo');
    }

  public function blocks()
     {
        return $this->belongsToMany('App\block');
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
