<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = "order_products";

    protected $fillable =[
        'number'
    ];

    public function device()
    {
        return $this->hasMany('App\Device','idDevice','id');
    }

    public function order()
    {
        return $this->belongsTo('App\Order','idOrder','id');
    }
}
