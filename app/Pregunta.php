<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $fillable = ['tramite_id','pregunta','respuesta'];


    public function tramite() {
        return $this->belongsToMany(Tramite::class);
   }





}
