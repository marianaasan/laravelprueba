<div class="modal fade" id="modificar_tipo_documento">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar tipo documento:</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.tipos documentos.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_tipo_documento" value="{{$tipos_documentos->id_tipo_documento}}">
				<div class="form-group">
					<label>Tipo documento</label>
					<input type="text" name="tipo_documento" class="form-control" value="{{$tipos_documentos->tipo_documento}}">
				</div>
				
				<div class="form-group">
					<label>Sigla</label>
					<input type="text" name="sigla" class="form-control" value="{{$tipos_documentos->sigla}}">
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