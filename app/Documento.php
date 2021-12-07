<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';  
  
    public $fillable = [
      'id','titulo','ext','tipo','subtipo','nm','id_est','id_doc','id_user_c','id_user_m','created_at','updated_at'
    ];
    public function estudiante(){
      return $this->belongsTo('App\Estudiante','id_est');
   }
    public function docente(){
     return $this->belongsTo('App\Docente','id_doc');
   }
}
