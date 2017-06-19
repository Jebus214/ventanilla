<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    //
    protected $fillable = ['nombre'];

    public function tramite() {
        return $this->belongsTo(Tramite::class);
   }

}
