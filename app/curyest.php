<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curyest extends Model
{
    protected $table = 'cur_est';  

    public $fillable = [
        'id', 'id_est', 'id_cur', 'created_at', 'updated_at'
    ];
}
