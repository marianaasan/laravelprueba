<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidades extends Model
{
    protected $table="localidades"; //ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_localidad";
    protected $fillable=['id_localidad','id_provincia','nombre_localidad'];

 public function Personas()
 {
   return $this->belongsTo('App\Personas'); //se refiere al modelo NO a la TABLA//
 }
}
