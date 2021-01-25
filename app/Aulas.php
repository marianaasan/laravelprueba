<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
   	protected $table="aulas"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_aula";
    protected $fillable=['id_aula','nombre','capacidad'];

	public function Comisionespordia()
    {
    	return $this->belongsTo('App\Comisionespordia'); //se refiere al modelo NO a la TABLA//
    }
}
