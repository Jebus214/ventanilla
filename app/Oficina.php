<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    //
    protected $fillable = ['tramite_id','tipo','calle','numext','numint','colonia','municipio','CP','horario','mail','lada','telefono','extension','oficina','titular','municipios_a'];


   	public function tramite() {
        return $this->belongsTo(Tramite::class);
   }

}
