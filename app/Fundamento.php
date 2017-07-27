<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fundamento extends Model
{
    //
    protected $fillable = ['tramite_id','articulo','fraccion','ley'];


   	public function tramite() {
        return $this->belongsTo(Tramite::class);
   }

}
