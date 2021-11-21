<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    public $fillable = [
        'id', 'titulo', 'año', 'created_at','updated_at'
    ];
}
