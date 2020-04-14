<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable =[
        'idUser',
        'title',
        'preview',
        'body',
        'photo',
        'likes',
    ];

    public function likePost()
    {
        return $this->hasMany('App\LikedPost','idPost','id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment','idPost','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','idUser','id');
    }
}
