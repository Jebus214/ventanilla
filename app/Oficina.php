<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    //
    protected $fillable = ['id_tramite','calle','numext','numint','colonia','municipio','CP','horario','mail','lada','telefono','extension','oficina','titular'];


   	public function tramite() {
        return $this->belongsTo(Tramite::class);
   }

}
