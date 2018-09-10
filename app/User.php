<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

   
    protected $fillable = [
        'name', 'phone', 'email', 'password', 'role_id',
    ];

    
    function role(){
        return $this->belongsTo(Role::class);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
