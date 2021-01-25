<div class="modal fade" id="modificarProvincia">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Provincia:</label>				
			</div>
			<div class="modal-body">

			  
			  <form action="{{ route('escuela.provincias.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">

			<div class="form-group">
					<select id="id_pais" name="id_pais" class="form-control selectpicker" data-live-search="true" >
					@foreach($paises as $pa)
						<option value="{{ $pa->id_pais }}" {{ $provincias[0]->id_pais==$pa->id_pais ? 'selected' : ' ' }}>{{ $pa->id_pais }}  {{ $pa->nombre_pais }}</option>
					@endforeach
					</select>
			</div>

<input type="hidden" name="id_provincia" id ="id_provincia"  value="{{$provincias[0]->id_provincia}}">
				<div class="form-group">
					<label>Provincia</label>
					<input type="text" name="nombre_provincia" class="form-control" value="{{$provincias[0]->id_provincia}}">
					
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
      $("#nombre_provincia").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection