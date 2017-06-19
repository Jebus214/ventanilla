<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    //
    protected $fillable = ['id_dependencia','nombre'];



	public function dependencia() {
        return $this->belongsTo(Dependencia::class);
   }


	public function user() {
        return $this->hasMany(User::class);
   }
      
}
