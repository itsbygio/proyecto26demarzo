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

    public function documentos(){
        return $this->hasMany('App\Documento','id');
    }

}
