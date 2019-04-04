<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
	use Notifiable;

    //
    protected $fillable = [
    	'name',
    	'last_name',
    	'email',
    	'password',
        'status',
        'cert_number',



    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function notifications(){
            return $this->hasMany('App\Notification');
    }
}
