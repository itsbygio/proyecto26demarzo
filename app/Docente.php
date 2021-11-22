<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Docentes as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Docente extends Model
{
 use Notifiable;

    protected $table = 'docentes';  

    public $fillable = [
        'id', 'nombre', 'apellidos','email','contacto', 'direccion','tipo_doc', 'estado',
        'num_id', 'tp', 'ac','escalafon', 'created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
