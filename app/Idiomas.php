<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    protected $table="idiomas"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_idioma";
    protected $fillable=['id_idioma','idioma'];

   	public function Cursos()
    {
    	return $this->belongsTo('App\Cursos'); //se refiere al modelo NO a la TABLA//
    }
}
