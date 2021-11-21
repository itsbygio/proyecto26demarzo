<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Estudiantes as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Estudiantes extends Model
{
    public $fillable = [
        'id', 'nombre', 'apellidos','email','contacto', 'direccion' ,'tipo_doc', 
        'num_id', 'estado', 'fecha_f','id_curso', 'created_at','updated_at'
    ];

}
