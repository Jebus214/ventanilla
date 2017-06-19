<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    //
    protected $fillable = ['id_dependecia','id_rubro','id_unidad','nombre','descripcion','fun_legal','doc_obtener','vigencia','casos','criterios','duracion','tiempo_rep','costo','formapago','dondepag','elabora','revisa','autoriza','vbpresidencia'];


   	public function rubro() {
        return $this->hasMany(Rubro::class);
   }


   	public function unidad() {
        return $this->belongsTo(Unidad::class);
   }


   	public function dependencia() {
        return $this->belongsTo(Dependencia::class);
   }


	public function oficina() {
        return $this->hasMany(Oficina::class);
   }



	public function oficina() {
        return $this->hasMany(Pregunta::class);
   }

   


}