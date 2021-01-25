@extends('layouts.admin')


@section('content')

	
  <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo Compromiso</b></h3>
		</div>		
	</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form method="POST" autocomplete="off" action="{{route('escuela.compromisos.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}
<form>

<div class="form-row">
 <div class="form-group col-md-6">
      <label for="tipos_compromisos">Tipo compromiso</label>
     <select name="id_tipo_compromiso" class="form-control selectpicker" id="id_tipo_compromiso" value= "{{old ('id_tipo_compromiso')}} " data-live-search="true" >
       <option value="--Seleccionar--">--Seleccionar--</option>

    		   @foreach($tipos_compromisos as $tipos_compromisos)
                  <option value="{{ $tipos_compromisos->id_tipo_compromiso }}"> {{ $tipos_compromisos->descripcion }}</option>
                @endforeach
     </select>
</div>
</div>
    <div class="form-group col-md-6">
      <label for="monto_total">Monto total</label>
      <input type="number" step="0.01" class="form-control @error('monto_total') is-invalid @enderror" name= "monto_total" id="monto_total" value= "{{old ('monto_total')}} " max="99999999" min="0.01" required>
    </div>
                           

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fecha_inicio">Fecha inicio</label>
      <input type="date" name= "fecha_inicio" class="form-control" value="{{old('fecha_inicio')}}" max="{{now()->format('Y-m-d')}}" id="fecha_inicio" placeholder="dd/mm/yyyy" required>
    </div>

    <div class="form-group col-md-6">
      <label for="fecha_fin">Fecha fin</label>
      <input type="date" name= "fecha_fin" class="form-control"  value="{{old('fecha_fin')}}" max="{{now()->format('Y-m-d')}}" id="fecha_fin" required>
    </div>
  </div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="disposicion">Disposición</label>
      <input type="number" name= "disposicion" class="form-control" id="disposicion" >
    </div>

    <div class="form-group col-md-6">
      <label for="nro_contrato">Número de contrato</label>
      <input type="text" name= "nro_contrato" class="form-control" id="nro_contrato" placeholder="000-0000" data-mask ='999-9999' >
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fecha_baja">Fecha baja</label>
      <input type="date"name= "fecha_baja"  class="form-control" id="fecha_baja">
    </div>

 	<div class="form-group col-md-6">

      <label for="estado">Estado</label>
      <input type="text" name= "estado" class="form-control" id="estado">
    </div>
  </div>


<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <div class="form-group">
    <label for="id_persona">Personal:</label>
<select id="id_persona" name="id_persona" class="form-control selectpicker" data-live-search="true">
    <option value="id_persona">--Seleccionar--</option>
@foreach($personas as $per)
        <option value="{{ $per->id_persona }}">{{$per->apellidos}} {{ $per->nombres}} {{ $per->documento}}</option>
@endforeach
</select>
  </div> 
</div> 


<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <div class="form-group">
    <label for="id_rol">Rol:</label>
    <select id="id_rol" name="id_rol" class="form-control selectpicker" data-live-search="true">
<option value="id_rol">--Seleccionar--</option>
    @foreach($roles as $rol)
        <option value="{{ $rol->id_rol }}">{{$rol->tipo_rol}} </option>
    @endforeach
</select>

  </div>
</div> 

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
      <label for="monto_mensual">Monto mensual</label>
     <input type="number" id= "monto_mensual" step="0.01" class="form-control @error('monto_mensual') is-invalid @enderror" name= "monto_mensual" id="monto_mensual" value= "{{old ('monto_mensual')}} " max="99999999" min="0.01">
    </div>
  </div>

 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <button type="button" id="btn_add" class="btn btn-primary">Agregar</button>
    </div>
</div>
<div class="container-fluid">
    <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                    <thead style="background-color: #3396FF;">
                      <th style="width:30%">Personal<span class="text-danger">*</span></th>
                      <th style="width:30%">Rol<span class="text-danger">*</span></th>
                      <th style="width:30%">Monto mensual<span class="text-danger">*</span></th>
                      <th style="width:10%" class="justify-content-center">Acciones</th>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tfoot>>

  </table>
</div>

<div class="form-group col-md-6">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{route('escuela.compromisos.index')}}" class="btn btn-default">Cancelar</a>
</div>

</form>
@endsection
@section('js')
<script>

$(document).ready(function(){
  //console.log('hola');
    $("#btn_add").click(function(){
    agregar();
    //$("#error").remove();
  });
  $("#nro_contrato").inputmask("000-0000"); 

  $('#nro_contrato').mask('000-0000');
});

var i=0;
function agregar(){
//console.log('hola');

      persona=$("#id_persona option:selected").text();
      rol=$("#id_rol option:selected").text();
      id_persona=$("#id_persona option:selected").val();
      id_rol=$("#id_rol option:selected").val();
      monto_mensual=$("#monto_mensual").val();

      if (id_persona!="" && id_rol!="" && monto_mensual!=""){

  var fila ="<tr class='selected' id='fila"+i+"'><td><input type='hidden' name='id_personas[]' value="+id_persona+">"+persona+"</td><td><input type='hidden' name='id_roles[]' value="+id_rol+">"+rol+"</td><td><input type='number' name='montos_mensuales[]' value="+monto_mensual+"></td><td><button type='button' class='btn btn-danger' onclick='eliminar("+i+");'><i class='fas fa-trash-alt fa-fw'></i></button></td></tr>";

      i++;
      limpiar();
      $('#detalles').append(fila);
      }
      else
      {
        alert ('Error al ingresar los datos');
      }
}

 function limpiar(){
            $("#id_persona").val("");
            $("#id_rol").val("");
            $("#monto_mensual").val("");
        }

  function eliminar(index){
            $("#fila"+index).remove();
          
        }


</script>

@endsection

