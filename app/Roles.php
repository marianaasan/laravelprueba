<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    
	protected $table="roles"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_rol";
    protected $fillable=['id_rol','tipo_rol'];

	public function Personas_compromisos()
    {
    	return $this->belongsTo('App\Personas_compromisos'); //se refiere al modelo NO a la TABLA//
    }






}
