<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Notas as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Nota extends Model
{
    public $fillable =[

        'id', 'nota', 'id_curso', 'id_materia', 'created_at','update_at'
    ];
}
