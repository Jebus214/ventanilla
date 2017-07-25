<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
        //
  protected $fillable = ['tramite_id','fundamento','tipo','descripcion','original','copia'];


  public function tramite() {
      return $this->belongsTo(Tramite::class);
 }


}
