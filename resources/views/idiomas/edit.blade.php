<div class="modal fade" id="modificarIdioma">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Idioma</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.idiomas.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_idioma" value="{{$idiomas->id_idioma}}">
				<div class="form-group">
					<label>Idioma</label>
					<input type="text" name="idioma" id="idioma" class="form-control" value="{{$idiomas->idioma}}">
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
      $("#idioma").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection