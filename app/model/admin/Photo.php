<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{   

	 protected $uploads = 'assets/images/';
    protected $fillable = ['photo_tag',];
}
