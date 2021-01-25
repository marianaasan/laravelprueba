@extends('layouts.admin')

@section('content')


	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo</b></h3>
		</div>		
	</div>

		<form method="POST" autocomplete="off"  action="{{route('escuela.personas.store')}}" enctype="multipart/form-data" id="form-personas-create">


  	{{-- {!!Form::token()!!} --}}
 	{{ csrf_field() }}
  			  	  
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					
					
						<div class="form-group">
              			<label for="tipo_documento">Tipo documento:</label>
						 <select name="id_tipo_documento" class="form-control selectpicker" id="id_tipo_documento"  data-live-search="true" >
						 <option value="--Seleccionar--">--Seleccionar--</option>

						@foreach ($tipos_documentos as $tipos_documentos)
							<option value="{{ $tipos_documentos->id_tipo_documento }}">{{$tipos_documentos->sigla }}</option>
						@endforeach
								
							</select>	
						</div>

						<div class="form-group">
							<label for="documento">Numero documento:</label>
					<input type="text" name="documento" id='dni' data-mask='99.999.999' class="form-control" placeholder="" required>
							
						</div>

						<div class="form-group">
							<label for="cuit">CUIT:</label>
					<input type="text" name="cuit" id='CUIT' data-mask='99-99999999-9' class="form-control" placeholder="">
						</div>

						<div class="form-group">
							<label for="nombre">Nombres:</label>
						<input type="text" name="nombres" class="form-control" placeholder="" required>
						</div>						

						<div class="form-group">
							<label for="apellidos">Apellidos:</label>
							<input type="text" name="apellidos" class="form-control" placeholder="" required>
						</div>

						<div class="form-group">
							<label for="fecha_nacimiento">Fecha de nacimiento:</label>
							<input type="date" id="fecha_nac" name="fecha_nacimiento" class="form-control input-sm" required>

								<span class="label label-info">
									<label>Edad Aproximada</label>
									<input type="text" class ="form-control" id="edad_aprox" disabled>
								</span>
						
						</div>
							<div class="form-group">
							<label for="apellidos">Estado:</label>
							<select name="estado" class="form-control selectpicker" >
								<option>---Seleccionar----</option>
								<option value="activo">Activo</option>
								<option value="baja">Baja</option>
							</select>
						</div>

				
						<div class="form-group">
              			<label for="id_sexo">Sexo:</label>
						 <select name="id_sexo" class="form-control selectpicker" id="id_sexo"  data-live-search="true" >
						 <option value="--Seleccionar--">--Seleccionar--</option>

						@foreach ($sexos as $sexos)
							<option value="{{ $sexos->id_sexo}}">{{ $sexos->sigla }}</option>
						@endforeach
								
							</select>
							
						</div>

						<div class="form-group">
							<label>Localidad</label>
							<select name="id_localidad" class="form-control selectpicker" id="id_localidad" data-live-search="true" >
								<option value="--Seleccionar--">--Seleccionar--</option>
								@foreach($localidades as $localidades)
									<option value="{{ $localidades->id_localidad }}">{{ $localidades->nombre_localidad }}</option>
								@endforeach
								
							</select>
		
						</div>

						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" name="email" id= "email" class="form-control" placeholder="" required>
						</div>

						<div class="form-group">
							<label for="telefono_fijo">Telefono Fijo: (*con caract)</label>
							<input type="text" name="telefono_fijo" data-mask="99999-999999"class="form-control" placeholder="">
						</div>

						<div class="form-group">
							<label for="telefono_celular">Telefono Celular: (*con caract)</label>
							<input type="text" name="telefono_celular" data-mask="99999-999999" class="form-control" placeholder="">
						</div>

						<div class="form-group">
							<label for="calle">Calle:</label>
							<input type="text" name="calle" class="form-control" placeholder="" required>
						</div>


						<div class="form-group">
							<label for="dpto">Departamento:</label>
							<input type="text" name="dpto" class="form-control" placeholder="" required>
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.personas.index')}}" class="btn btn-default">Cancelar</a>

						</div>
					</div>

<div class="row">

    <div class="panel panel primary">
      <div class= "panel-body">
          <div class="col-lg-3 col-ms-3 col-md-3 col-xs-12" >
         
            <div class="form-group">
              <label for="id_persona">Personal</label>
              <select name="id_persona" class="form-control selectpicker" id="id_persona" value= "{{old ('id_persona')}} " data-live-search="true" >
       <option value="--Seleccionar--">--Seleccionar--</option>

           @foreach($personas as $personas)
                 <option value="{{ $personas->id_persona}}"> {{ $personas->datospersonales }}</option>
           @endforeach         
     </select>
     </div>  
</div>
</div class="col-lg-3 col-ms-3 col-md-3 col-xs-12" >
	 <div class="form-group">
	 	<label for="id_rol">Rol</label>
	 	<select name="id_rol" class="form-control selectpicker" id="id_rol" value= "{{old ('id_rol')}} " data-live-search="true" >
       <option value="--Seleccionar--">--Seleccionar--</option>

           @foreach($roles as $roles)
                 <option value="{{ $roles->id_rol}}"> {{ $roles->roles }}</option>
           @endforeach         
     </select>
	</div>
	
</div>
	</div class="col-lg-3 col-ms-3 col-md-3 col-xs-12" >
	 <div class="form-group">
	 	<select name="id_persona" class="form-control selectpicker" id="id_persona" value= "{{old ('id_persona')}} " data-live-search="true" >
       <option value="--Seleccionar--">--Seleccionar--</option>

           @foreach($personas as $personas)
                 <option value="{{ $personas->id_persona}}"> {{ $personas->datospersonales }}</option>
           @endforeach         
     </select>


	</div>
</div>

</div>





















				
		</form>



@endsection


@endsection



