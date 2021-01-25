<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compromisos extends Model
{
    
	protected $table="compromisos";
    protected $primaryKey="id_compromiso";
    protected $fillable=['id_compromiso','id_tipo_compromiso','fecha_inicio','fecha_fin','monto_total','disposicion','nro_contrato','fecha_baja','estado'];

   	
   	public function Personas_compromisos() //VER RELACION
    {
    	return $this->belongsToMany('App\Personas_Compromisos')->withPivot ('monto_mensual'); //se refiere al modelo NO a la TABLA//
    }

	public function fecha (){

		return date ("d/m/y", strtotime($this->fecha_inicio));
		return date ("d/m/y", strtotime($this->fecha_fin));
}
}