<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    //
    protected $fillable = ['id','nombre'];


   	public function unidad() {
        return $this->hasMany(Unidad::class);
   }


   	public function user() {
        return $this->hasMany(User::class);
   }
      

}
