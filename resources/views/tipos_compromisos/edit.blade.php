<div class="modal fade" id="modificarTipos_compromisos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar tipos compromisos</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.tipos_compromisos.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_tipo_compromiso" value="{{$tipos_compromisos->id_tipo_compromiso}}">
			  		
				<div class="form-group">
					<label>Tipos Compromisos</label>
					<input type="text" name="descripcion" id="descripcion"  class="form-control" value="{{$tipos_compromisos->descripcion}}">
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


@section('js')
<script>
	
  $(document).ready( function () {
      $("#descripcion").on("keypress", function ()
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection