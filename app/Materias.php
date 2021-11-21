<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Materias as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Materias extends Model
{
    public $fillable =[
           
        'id', 'titulo', 'created_at','updated_at'
    ];
}
