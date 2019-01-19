<?php

namespace App\model\admin;

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
        return $this->belongsTo('App\model\admin\Photo');
    }

  public function blocks()
     {
        return $this->belongsToMany('App\model\admin\block');
    }
       public function Role()
     {
        return $this->belongsToMany('App\model\admin\Role');
    }

 public function Isactive(){

    if($this->status == 1){
        return true;
    }
    elseif($this->user()->hasRole('None')){
        return false;
    }
    else{
        return false;
    }
 }


  public function Isadmin(){

    if($this->hasRole('Admin')){
        return true;
    }
    elseif($this->hasRole('Editor')){
        return true;
    }
    else{
        return false;
    }
 }

  public function IsmainAdmin(){

    if($this->hasRole('Admin')){
        return true;
    }
    else{
        return false;
    }
 }

   public function Iscoder(){

    if($this->hasRole('Coder')){
        return true;
    }
    else{
        return false;
    }
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
