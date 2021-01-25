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
					<label>Calle</label>
					<input type="text" name="calle" class="form-control" value="{{$personas[0]->calle}}">
				</div>
				<div class="form-group">
					<label>Numero</label>
					<input type="text" name="numero" class="form-control" value="{{$personas[0]->numero}}">
				</div>
				<div class="form-group">
					<label>Departamento</label>
					<input type="text" name="dpto" class="form-control" value="{{$personas[0]->dpto}}">
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