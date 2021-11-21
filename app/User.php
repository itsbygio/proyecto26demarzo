<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'id', 'nombre', 'apellidos','email', 'estado', 'email_verified_at',
        'password', 'contacto', 'rol', 'nrol', 'created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
}
