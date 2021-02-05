<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nave extends Model
{
    protected $fillable = [
        'num_nave', 'seccion', 'superficie', 'precio', 'renta_mensual', 'iva', 'renta_total',
        'estatus', 'empresa_id',
    ];

     //Evento que se ejecuta cuando una empresa es creada

   
   /*  
     protected static function boot()
     {
         parent::boot();
         //asigna una nave una ve que se haya creado una empresa nueva 
         
         
         static::created(function ($nave){
             $nave->empresa()->create();
         });
     }
 */

        
    public function empresa()
   {
      return  $this->belongsTo(Empresa::class);
   }
    
}
