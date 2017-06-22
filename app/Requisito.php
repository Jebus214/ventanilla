<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    //
    protected $fillable = ['id_tramite','id_requisito_fundamento','tipo','descripcion','original','copia'
];


}
