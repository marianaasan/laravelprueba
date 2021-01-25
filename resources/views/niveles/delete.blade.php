<div class="modal fade" id="eliminarNiveles">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar nivel</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/niveleseliminar/{{$niveles->id_nivel}} " method="get" id="formDestroyniveles" >
			  	<input type="hidden" value="csrf-token">

			  <input type="hidden" name="id_nivel" value="{{$niveles->id_nivel}}">
				<div class="form-group">
					<label>Niveles</label>
					{{$niveles->nivel}}
					
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