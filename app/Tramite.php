<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    //
    protected $fillable = ['dependecia_id','rubro_id','unidad_id','nombre','descripcion','fun_legal','doc_obtener','vigencia','casos','criterios','duracion','tiempo_rep','costo','formapago','dondepag','elabora','revisa','autoriza','vbpresidencia'];


   	public function rubro() {
        return $this->belongsTo(Rubro::class);
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



	public function pregunta() {
        return $this->hasMany(Pregunta::class);
   }

   public function fundamento() {
          return $this->hasMany(Fundamento::class);
     }

   public function requisito() {
          return $this->hasMany(Requisito::class);
     }




}
