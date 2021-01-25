<div class="modal fade" id="modificarNiveles">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Nivel</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.niveles.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_nivel" value="{{$niveles->id_nivel}}">
				<div class="form-group">
					<label>Nivel</label>
					<input type="text" name="nivel" id="nivel"  class="form-control" value="{{$niveles->nivel}}">
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
      $("#nivel").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection