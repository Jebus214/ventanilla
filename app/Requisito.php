<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
        //
  protected $fillable = ['id_tramite','fundamento','tipo','descripcion','original','copia'];


  public function tramite() {
      return $this->belongsTo(Tramite::class);
 }


}
