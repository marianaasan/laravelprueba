<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_documentos extends Model
{
    protected $table="tipos_documentos"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_tipo_documento";
    protected $fillable=['id_tipo_documento','tipo_documento','sigla'];

   	public function Personas()
    {
    	return $this->belongsTo('App\Personas'); //se refiere al modelo NO a la TABLA//
    }
}
