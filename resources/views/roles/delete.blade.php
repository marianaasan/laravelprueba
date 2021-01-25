<div class="modal fade" id="eliminarRoles">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar rol</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/roleseliminar/{{$roles->id_rol}} " method="get" id="formDestroyroles" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_rol" value="{{$roles->id_ro}}">
				<div class="form-group">
					<label>Rol</label>
					{{$roles->tipo_rol}}
					
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