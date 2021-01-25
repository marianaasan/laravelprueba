@extends('layouts.admin')

@section('content')


	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nueva Persona</b></h3>
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

		<form method="POST" autocomplete="off"  action="{{route('escuela.personas.store')}}" enctype="multipart/form-data" id="form-personas-create">


  	{{-- {!!Form::token()!!} --}}
 	{{ csrf_field() }}
  			   
  			   	<div class="form-row">
    				<div class="form-group col-md-4">				
              			<label for="tipo_documento">Tipo documento:</label>
						 <select name="id_tipo_documento" class="form-control selectpicker" id="id_tipo_documento"  data-live-search="true" >
						 <option value="--Seleccionar--">--Seleccionar--</option>

						@foreach ($tipos_documentos as $tipos_documentos)
							<option value="{{ $tipos_documentos->id_tipo_documento }}">{{$tipos_documentos->sigla }}</option>
						@endforeach
								
							</select>	
						</div>

						<div class="form-group col-md-4">
							<label for="documento">Número documento:</label>
					<input type="text" name="documento" id='dni' data-mask='99.999.999' class="form-control" placeholder="" required>
							
						</div>

    				<div class="form-group col-md-4">	
							<label for="cuit">CUIT:</label>
					<input type="text" name="cuit" id='CUIT' data-mask='99-99999999-9' class="form-control" placeholder="">
						</div>


						</div>
						<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nombre">Nombres:</label>
						<input type="text" name="nombres"  id="nombres" class="form-control" placeholder="" required>
						</div>						
						</div>
						<div class="form-group col-md-6">
							<label for="apellidos">Apellidos:</label>
							<input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="" required>
						</div>

						<div class="form-row">
						<div class="form-group col-md-6">
							<label for="fecha_nacimiento">Fecha de nacimiento:</label>
 							<input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" 
                            id="fecha_nac" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}" max="{{now()->format('Y-m-d')}}">

                       
								<span class="label label-info">
									<label>Edad</label>
									<input type="text" class ="form-control" id="edad_aprox" disabled>
								</span>
	
						</div>
						</div>
						<div class="form-group col-md-6">
							<label for="estado">Estado:</label>
							<select name="estado" class="form-control selectpicker" >
								<option>---Seleccionar----</option>
								<option value="activo">Activo</option>
								<option value="baja">Baja</option>
							</select>
						</div>

				
						<div class="form-row">
						<div class="form-group col-md-6">
              			<label for="id_sexo">Sexo:</label>
						 <select name="id_sexo" class="form-control selectpicker" id="id_sexo"  data-live-search="true" >
						 <option value="--Seleccionar--">--Seleccionar--</option>

						@foreach ($sexos as $sexos)
							<option value="{{ $sexos->id_sexo}}">{{ $sexos->sigla }}</option>
						@endforeach
								
							</select>
							
						</div>
							</div>
						<div class="form-group col-md-6">
							<label>Localidad</label>
							<select name="id_localidad" class="form-control selectpicker" id="id_localidad" data-live-search="true" >
								<option value="--Seleccionar--">--Seleccionar--</option>
								@foreach($localidades as $localidades)
									<option value="{{ $localidades->id_localidad }}">{{ $localidades->nombre_localidad }}</option>
								@endforeach
								
							</select>
		
						</div>

						<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">Email:</label>
							<input type="email" name="email" id= "email" class="form-control" placeholder="" required>
						</div>
							</div>
							<div class="form-group col-md-6">
							<label for="telefono_fijo">Telefono Fijo: (*con caract)</label>
							<input type="text" name="telefono_fijo" data-mask="99999-999999"class="form-control" placeholder="">
						</div>

						<div class="form-row">
						<div class="form-group col-md-6">
							<label for="telefono_celular">Telefono Celular: (*con caract)</label>
							<input type="text" name="telefono_celular" data-mask="99999-999999" class="form-control" placeholder="">
						</div>
						</div>

						<div class="form-row">
						<div class="form-group col-md-12">
							<label for="domicilio">Domicilio:</label>
							<input type="text" name="domicilio" id="domicilio" class="form-control" placeholder="" required>
						</div>
						</div>
					<div class="form-group col-md-6">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.personas.index')}}" class="btn btn-default">Cancelar</a>

						</div>
					</div>

					{{--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            			<div class="content">         
            				<img src="{{ asset('./img/grafico.jpg') }}" style="width: 200px; height: 200px; border: 2px solid black">
      					</div>
      				</div>--}}
		</form>
@endsection
	

@section('scrypts')
	$(document).ready(function(){
		var fecha_nac;
		var ano;
		var fecha_actual;
		var f;
		var resultado;
		$('#fecha_nac').blur(function(){
		    fecha_actual= new Date();
		    f=fecha_actual.getFullYear();
		   // alert(f);
			var fecha = new Date($('#fecha_nac').val());
			ano= fecha.getFullYear();
			//alert(ano);
			resultado= f-ano;
			//alert(resultado);
			$('#edad_aprox').val(resultado  + 'años');	

		});
	});

@endsection

@section('js')
<script>
$(document).ready(function()
	{ 
		$("#dni").inputmask("00.000.000"); 
		$('#CUIT').inputmask ("00-00000000-0");
		

	});

   $("#nombres").on("keypress", function ()
   
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });

  $("#apellidos").on("keypress", function ()
   
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });

  $("#domicilio").on("keypress", function ()
   
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });


</script>

@endsection



