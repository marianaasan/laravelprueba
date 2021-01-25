<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveles extends Model
{
    
	protected $table="niveles"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_nivel";
    protected $fillable=['id_nivel','nivel'];

   	public function Cursos()
    {
    	return $this->belongsTo('App\Cursos'); //se refiere al modelo NO a la TABLA//
    }



}
