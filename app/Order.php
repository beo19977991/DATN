<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable= [
        'totalPrice',
    ];

    public function orderDevice()
    {
        return $this->hasMany('App\OrderProduct','idOrder','id');
    }
}
