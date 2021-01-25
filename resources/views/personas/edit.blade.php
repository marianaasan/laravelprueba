<div class="modal fade" id="modificarPersona">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Persona</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.personas.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_persona" value="{{$personas[0]->id_persona}}">
				

				<div class="form-group">
					<label>Tipo documento</label>
					<select id="id_tipo_documento" name="id_tipo_documento" class="form-control selectpicker" data-live-search="true" >
				@foreach ($tipos_documentos as $tipos_documentos)
			<option value="{{ $tipos_documentos->id_tipo_documento}}" {{ $personas[0]->id_tipo_documento==$tipos_documentos->id_tipo_documento? 'selected' : ' ' }}>{{ $tipos_documentos->sigla}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label>Documento</label>
					<input type="text" name="documento" class="form-control" value="{{$personas[0]->documento}}">
				</div>
				<div class="form-group">
					<label>Cuit</label>
					<input type="text" name="cuit" class="form-control" value="{{$personas[0]->cuit}}">
				</div>
				<div class="form-group">
					<label>fecha Nacimiento</label>
					<input type="text" name="fecha_nacimiento" class="form-control" value="{{$personas[0]->fecha_nacimiento}}">
				</div>
				<div class="form-group">
					<label>Nombres</label>
					<input type="text" name="nombres" class="form-control" value="{{$personas[0]->nombres}}">
				</div>
				<div class="form-group">
					<label>Apellido</label>
					<input type="text" name="apellidos" class="form-control" value="{{$personas[0]->apellidos}}">
				</div>
				<div class="form-group">
					<label>correo</label>
					<input type="email" name="email" class="form-control" value="{{$personas[0]->email}}">
				</div>
				
				<div class="form-group">
					<label>Domicilio</label>
					<input type="text" name="domicilio" class="form-control" value="{{$personas[0]->domicilio}}">
				</div>
				<div class="form-group">
					<label>Telefono</label>
					<input type="text" name="telefono_fijo" class="form-control" value="{{$personas[0]->telefono_fijo}}">
				</div>
				<div class="form-group">
					<label>Celular</label>
					<input type="text" name="telefono_celular" class="form-control" value="{{$personas[0]->telefono_celular}}">
				</div>


				<div class="form-group">
					<label>Condicion</label>
					<select name="estado" class="form-control selectpicker">
						<option>---Seleccionar condicion---</option>
						<option value="activo">Activo</option>
						<option value="baja">Baja</option>
					</select>
				</div>

				<div class="form-group">
					<label>Sexo</label>
					<select id="id_sexo" name="id_sexo" class="form-control selectpicker" data-live-search="true" >
					@foreach ($sexos as $sexos)
						<option value="{{ $sexos->id_sexo}}" {{ $personas[0]->id_sexo==$sexos->id_sexo ? 'selected' : ' ' }}>{{ $sexos->sigla}}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Localidad</label>
					<select id="id_localidad" name="id_localidad" class="form-control selectpicker" data-live-search="true" >
					@foreach($localidades as $localidades)
						<option value="{{ $localidades->id_localidad}}" {{ $personas[0]->id_localidad ==$localidades->id_localidad ? 'selected' : ' ' }}> {{ $localidades->nombre_localidad}}</option>
					@endforeach
					</select>
				</div>
			

				<div class="form-group">
					<button class="btn btn-success" type="submit">Guardar</button>
					<button class="btn btn-default" data-dismiss="modal" >Cancelar</button>
				</div>
			  {{-- {!!Form::close()!!} --}}
			 </form> 	
			</div>
			<div class="modal-footer">
			</div>
			   {{-- @foreach ($categorias as $key => $val) --}}
                    {{-- <option value="{{ $key }}" {{ $key == old('categoria_id') ? 'selected' : '' }}>{{ $val }}</option> --}}
      {{-- @endforeach --}}
		</div>
	</div>
</div>