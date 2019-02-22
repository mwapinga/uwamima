<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [ 'name','email','comment','blog_id','status'];

         public function post(){
        return $this->belongsTo('App\model\admin\blog');
    }
}
