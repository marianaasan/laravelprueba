<div class="modal fade" id="eliminarSexos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar sexo:</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/sexoseliminar/{{$sexos->id_sexo}} " method="get" id="formDestroysexos" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_sexo" value="{{$sexos->id_sexo}}">
				<div class="form-group">
					<label>Sexo:</label>
					{{$sexos->descripcion}}
					
				</div>
				
				<div class="form-group">
					<button class="btn btn-danger" type="submit">Eliminar</button>
					<button class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			  {{-- {!!Form::close()!!} --}}
			 </form> 	
			</div>
			<div class="modal-footer">
			</div>
		
		</div>
	</div>
</div>