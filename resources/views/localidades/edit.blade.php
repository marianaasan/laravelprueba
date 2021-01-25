<div class="modal fade" id="modificarLocalidades">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Localidad</label>				
			</div>
			<div class="modal-body">

			  <form action="{{ route('escuela.localidades.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">

			<div class="form-group">
					<select id="id_provincia" name="nombre_provincia" class="form-control selectpicker" data-live-search="true" >

					@foreach($provincias as $provincias)
						<option value="{{ $provincias->id_provincia }}" {{ $localidades[0]->id_provincia==$provincias->id_provincia ? 'selected' : ' ' }}>{{ $provincias->id_provincia }}  {{ $provincias->nombre_provincia }}</option>
					@endforeach

					</select>
			</div>

		<input type="hidden" name="id_localidad" value="{{$localidades[0]->id_localidad}}">
				<div class="form-group">
					<label>Localidad</label>
					<input type="text" name="nombre_localidad" id="nombre_localidad" class="form-control" value="{{$localidades[0]->id_localidad}}">
					
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
			
		</div>
	</div>
</div>

@section('js')
<script>
	
  $(document).ready( function () {
      $("#nombre_localidad").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection