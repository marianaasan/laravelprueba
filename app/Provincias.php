<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
    
	protected $table="provincias"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_provincia";
    protected $fillable=['id_provincia','id_pais','nombre_provincia'];

   public function localidades()
  {
    	return $this->belongsTo('App\Localidades');; //se refiere al modelo NO a la TABLA//
    }


}
