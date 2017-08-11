<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    //
    protected $fillable = ['dependecia_id','rubro_id','unidad_id','nombre','tipo','descripcion','fun_legal','doc_obtener','direccion_web','vigencia','duracion','casos','criterios','duracion','tiempo_rep','costo','formapago','dondepag','alternativa_pago','elabora','revisa','autoriza','vbpresidencia'];

  // protected $appends = ['oficinaDepedencia','oficinaUnidad','oficinaOtros'];

  protected $appends = ['oficinaDepedencia','oficinaUnidad','oficinaOtro'];


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

     public function GetOficinaDepedenciaAttribute(){
       return $this->oficina()->where('tipo', 'dependencia')->get();

     }


     public function GetOficinaUnidadAttribute(){
       return $this->oficina()->where('tipo', 'unidad')->get();

     }


     public function GetOficinaOtroAttribute(){
       return $this->oficina()->where('tipo', 'otro')->get();

     }



}
