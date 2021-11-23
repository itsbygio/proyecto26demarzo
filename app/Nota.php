<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Notas as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Nota extends Model
{
    protected $table = 'notas';  

    public $fillable =[

        'id', 'nota', 'id_curso', 'id_materia','id_est', 'created_at','update_at'
    ];
    public function curso(){
        return $this->belongsTo('App\Curso','id_curso');
    }
    public function materia(){
        return $this->belongsTo('App\Materia','id_materia');
    }
    public function estudiante(){
        return $this->belongsTo('App\Estudiante','id_est');
    }
}
