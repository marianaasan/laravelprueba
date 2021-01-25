<div class="modal fade" id="modificarPais">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Pais</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.paises.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_pais" value="{{$paises->id_pais}}">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="nombre_pais" id="nombre_pais" class="form-control" value="{{$paises->nombre_pais}}">
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
      $("#nombre_pais").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection