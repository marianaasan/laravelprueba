<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexos extends Model
{
   protected $table="sexos"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
   protected $primaryKey="id_sexo";
   protected $fillable=['id_sexo','descripcion','sigla'];

  public function Personas()
    {
    	return $this->belongsTo('App\Personas'); //se refiere al modelo NO a la TABLA//
    }
}
