<div class="modal fade" id="eliminarRango_horario">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar pais</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/rango_horarioeliminar/{{$rango_horario->id_pais}} " method="get" id="formDestroypaises" >
			  	<input type="hidden" value="csrf-token">

		<input type="hidden" name="id_rango_horario" value="{{$rango_horario->id_rango_horario}}">

				<div class="form-group">
					<label>Hora desde:</label>
					{{$rango_horario->hora_desde}}
					
				</div>
				
				<div class="form-group">
					<label>Hora hasta:</label>
					{{$rango_horario->hora_hasta}}
					
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