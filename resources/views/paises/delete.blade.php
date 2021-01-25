<div class="modal fade" id="eliminarPais">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar pais</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/paiseseliminar/{{$paises->id_pais}} " method="get" id="formDestroypaises" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_pais" value="{{$paises->id_pais}}">
				<div class="form-group">
					<label>Pais:</label>
					{{$paises->nombre_pais}}
					
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