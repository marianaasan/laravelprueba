<div class="modal fade" id="modificarCompromisos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Compromisos</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.compromisos.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_tipo_compromiso" value="{{$tipos_compromisos->id_tipo_compromiso}}">
			  		
				<div class="form-group">
					<label>Tipos Compromisos</label>
					<input type="text" name="descripcion" class="form-control" value="{{$tipos_compromisos->descripcion}}">
				</div>
				
				<div class="form-group">
					<label>Monto total</label>
					<input type="text" name="monto_total" class="form-control" value="{{$compromisos[0]->monto_total}}">
				</div>
				<div class="form-group">
					<label>Fecha Inicio</label>
					<input type="date" name="fecha_inicio" class="form-control" value="{{$compromisos[0]->fecha_inicio}}">
				</div>
				<div class="form-group">
					<label>Fecha fin</label>
					<input type="date" name="fecha_fin" class="form-control" value="{{$compromisos[0]->fecha_fin}}">
				</div>
				<div class="form-group">
					<label>Disposicion</label>
					<input type="text" name="disposicion" class="form-control" value="{{$compromisos[0]->disposicion}}">
				</div>
				<div class="form-group">
					<label>Fecha baja</label>
					<input type="date" name="fecha_baja" class="form-control" value="{{$compromisos[0]->fecha_baja}}">
				</div>
				<div class="form-group">
					<label>Estado</label>
					<input type="text" name="estado" class="form-control" value="{{$compromisos[0]->estado}}">
				</div>
			

				<div class="form-group">
					<button class="btn btn-success" type="submit">Guardar</button>
					<button class="btn btn-default" data-dismiss="modal">Cancelar</button>
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