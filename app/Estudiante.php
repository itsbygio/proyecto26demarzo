<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Estudiantes as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Estudiante extends Model
{
    protected $table = 'estudiantes';  

    public $fillable = [
        'id', 'nombre', 'apellidos','email','contacto', 'direccion' ,'tipo_doc', 
        'num_id', 'estado', 'fecha_f','id_curso', 'created_at','updated_at'
    ];
    public function curso(){
        return $this->belongsTo('App\Curso','id_curso');
    }
    public function curyest(){
        return $this->hasMany('App\Curyest','id');
    }
    public function notas(){
        return $this->hasMany('App\Nota','id');
    }
    public function documentos(){
        return $this->hasMany('App\Documento','id');
    }
}
