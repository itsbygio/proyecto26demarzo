<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $table = 'cursos';  

    public $fillable = [
        'id', 'titulo', 'titulo_letras','año', 'created_at','updated_at'
    ];
    public function estudiantes(){
        return $this->hasMany('App\Estudiante','id');
    }
    public function curyests(){
        return $this->hasMany('App\Curyest','id');
    }
    public function notas(){
        return $this->hasMany('App\Nota','id');
    }
}
