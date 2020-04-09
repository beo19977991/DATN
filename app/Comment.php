<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'idUSer',
        'idPost',
        'idParent',
        'body',
    ];

    public function post()
    {
        return $this->belongsTo('App\Post','idPost','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','idUser','id');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment', 'idParent');
    }
    public function childrenComment()
    {
        return $this->hasMany('App\comment', 'idParent')->with('childrenComment')->with('user');
    }
}
