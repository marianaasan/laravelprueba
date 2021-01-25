<div class="modal fade" id="modificarAulas">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Aulas :</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.aulas.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_aula" value="{{$aulas->id_aula}}">
				<div class="form-group">
					<label>Dia</label>
					<input type="text" name="nombre" id="nombre" class="form-control" value="{{$aulas->nombre}}">
				</div>
				<div class="form-group">
					<label>Capacidad</label>
					<input type="number" name="capacidad" class="form-control" value="{{$aulas->capacidad}}">
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
      $("#nombre").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection