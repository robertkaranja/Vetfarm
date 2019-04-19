<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'description',
        'price',
        'location',
        'phone',
        'user_id',
        'username',
       /** 'image',**/
    ];
}
