<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function tramite() {
        return $this->hasMany(Tramite::class);
   }


      public function unidad()
    {
        return $this->belongsTo(unidad::class);
    }


        public function dependencia()
    {
        return $this->belongsTo(Dependencia::class);
    }
}
