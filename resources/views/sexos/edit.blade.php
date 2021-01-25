<div class="modal fade" id="modificarSexos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Sexo</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.sexos.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_sexo" value="{{$sexos->id_sexo}}">
				
				<div class="form-group">
					<label>Descripcion</label>
					<input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$sexos->descripcion}}">
				</div>
				
				<div class="form-group">
					<label>Sigla</label>
					<input type="text" name="sigla" id="sigla" class="form-control" value="{{$sexos->sigla}}">
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
      $("#descripcion").on("keypress", function ()
      	$("#sigla").on("keypress", function ()
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection