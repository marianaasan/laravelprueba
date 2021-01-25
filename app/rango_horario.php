<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rango_horario extends Model
{
    protected $table="rango_horario"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_rango_horario";
    protected $fillable=['id_rango_horario','hora_desde','hora_hasta'];

   public function Cursos()
  {
    	return $this->belongsTo('App\Cursos');; //se refiere al modelo NO a la TABLA//
    }
}
