<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas_compromisos extends Model
{
 
	protected $table="Personas_compromisos";
    protected $primaryKey="id_persona_compromiso";
    protected $fillable=['id_persona_compromiso','id_compromiso','id_persona','id_rol','monto_mensual'];

}
