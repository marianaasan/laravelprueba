<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dias extends Model
{
    
	protected $table="dias"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_dia";
    protected $fillable=['id_dia','dia'];

	public function Comisionespordia()
    {
    	return $this->hasmany('App\Comisionespordia'); //se refiere al modelo NO a la TABLA//
    }


}
