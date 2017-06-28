<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $fillable = ['id_tramite','pregunta','respuesta'];


    public function tramite() {
        return $this->belongsToMany(Tramite::class);
   }





}
