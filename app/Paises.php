<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $table="paises"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_pais";
    protected $fillable=['id_pais','nombre_pais'];

   	public function Provincias()
    {
    	return $this->hasMany('App\Provincias'); //se refiere al modelo NO a la TABLA//
    }
}

