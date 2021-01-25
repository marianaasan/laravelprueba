<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_compromisos extends Model
{
    
	protected $table="tipos_compromisos"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_tipo_compromiso";
    protected $fillable=['id_tipo_compromiso','descripcion'];

	public function Personas_compromisos()
    {
    	return $this->belongsTo('App\Personas_compromisos'); //se refiere al modelo NO a la TABLA//
    }


}
