<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable =[
        'title',
        'preview',
        'body',
        'image',
        'likes',
    ];

    public function likePost()
    {
        return $this->hasMany('App\LikePost','idPost','id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment','idPost','id');
    }

    public function user()
    {
        return $this->belongTo('App\User','idUser','id');
    }
}
