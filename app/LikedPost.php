<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikedPost extends Model
{
    protected $table = "liked_posts";
    protected $fillable =[
        'idUser',
        'idPost',
        'status',
    ];

    public function post()
    {
        return $this->belongsTo('App\Post','idPost','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'idUser', 'id');
    }
}
