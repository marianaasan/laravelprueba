<div class="modal fade" id="eliminarProvincias">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar Provincia</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/provinciaseliminar/{{$provincias->id_provincia}} " method="get" id="formDestroyprovincias" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_provincia" value="{{$provincias->id_provincia}}">
				<div class="form-group">
					<label>Provincia:</label>
					{{$provincias->provincias}}
					
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