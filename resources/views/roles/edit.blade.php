<div class="modal fade" id="modificarRoles">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Rol</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.roles.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_rol" value="{{$roles->id_rol}}">
				<div class="form-group">
					<label>Rol</label>
					<input type="text" name="tipo_rol" id = "tipo_rol"  class="form-control" value="{{$roles->tipo_rol}}">
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
      $("#tipo_rol").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection