<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';  
  
    public $fillable = [
      'id','titulo','ruta','tipo','id_est','id_doc','id_user_c','id_user_m','created_at','updated_at'
    ];

}
