<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'title',
        'description',
        'image',
        'price_eur',
        'price_usd',
        'rating'
    ];
}
