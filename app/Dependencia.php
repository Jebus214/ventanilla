<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    //
    protected $fillable = ['id','nombre'];



    public function tramite() {
        return $this->hasMany(Tramite::class);
   }


    public function unidad() {
      return $this->hasMany(Unidad::class);
    }


    public function titular() {
        return $this->belongsTo(Titular::class);
   }

   	public function user() {
        return $this->hasMany(User::class);
   }


}
