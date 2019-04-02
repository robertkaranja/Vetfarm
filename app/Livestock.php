<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livestock extends Model
{
    //  
    protected $fillable =[
    	'name',
    	'weight',
    	'age',
    	'health_details',
    	'user_id',
    	'username',
    	

    ];
}
