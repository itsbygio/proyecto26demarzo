<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curyest extends Model
{

    protected $table = 'cur_est';  

    public $fillable = [
        'id', 'id_est', 'id_cur', 'created_at', 'updated_at'
    ];
    public function curso(){
        return $this->belongsTo('App\Curso','id_cur');
    }
    public function Estudiante(){
        return $this->belongsTo('App\Estudiante','id_est');
    }
}

