<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    protected $fillable = ['name', 'email', 'subject' , 'message'];

}
