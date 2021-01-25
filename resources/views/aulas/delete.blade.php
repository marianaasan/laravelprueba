<div class="modal fade" id="eliminarAulas">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar dia</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/diaseliminar/{{$dias->id_dia}} " method="get" id="formDestroydias" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_dia" value="{{$aulas->id_aula}}">
				<div class="form-group">
					<label>Nombre:</label>
					{{$aulas->nombre}}
					
				</div>

				<div class="form-group">
					<label>Capacidad:</label>
					{{$aulas->capacidad}}
					
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