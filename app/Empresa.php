<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Empresa extends Model
{
    use Notifiable;


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



      //Evento que se ejecuta cuando una nave es creada

    /*  protected static function boot()
      {
          parent::boot();
          //asigna empresa una ve que se haya creado una nave nueva
          
          
          static::created(function ($empresa){
              $empresa->nave()->create();
          });
      } */
 
   public function nave()
   {
      return  $this->hasMany(Nave::class);
   }
}
    