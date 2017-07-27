<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    //
    protected $fillable = ['nombre','calle','numext','numint','colonia','municipio','CP','horario','mail','lada','telefono','extension','oficina'];


   	public function dependencia() {
        return $this->hasOne(Dependencia::class);
   }



      	public function unidad() {
           return $this->hasOne(Unidad::class);
      }

}
