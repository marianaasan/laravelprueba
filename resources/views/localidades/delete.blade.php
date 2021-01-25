<div class="modal fade" id="eliminarLocalidades">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar localidad</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/localidadeseliminar/{{$localidades->id_localidad}} " method="get" id="formDestroylocalidades" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_localidad" value="{{$localidades->id_localidad}}">
				<div class="form-group">
					<label>Localidades</label>
					{{$localidades->localidades}}
					
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