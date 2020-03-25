<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'productName',
        'preview',
        'photo',
        'price',
    ];
    public function typeProduct()
    {
        return $this->belongsTo('App\TypeProduct','idProductType','id');
    }
}
