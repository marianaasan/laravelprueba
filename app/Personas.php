<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table="personas"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_persona";
    protected $fillable=['id_persona','id_sexo','id_tipo_documento','id_localidad','documento','cuit','fecha_nacimiento','nombres','apellidos','email','domicilio','telefono_fijo','telefono_celular'];

   	public function Personas_compromisos() //VER RELACION
    {
    	return $this->belongsToMany('App\Personas_Compromisos')->withPivot ('monto_mensual'); ; //se refiere al modelo NO a la TABLA//
    }
}
