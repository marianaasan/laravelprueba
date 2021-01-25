<div class="modal fade" id="modificarRangohorario">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Pais</label>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('escuela.rango_horario.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_rango_horario" value="{{$rango_horario->id_rango_horario}}">

				<div class="form-group">
					<label>Hora desde</label>
					<input type="time" name="hora_desde" id="hora_desde" class="form-control" value="{{$rango_horario->hora_desde}}">
				</div>
				

				<div class="form-group">
					<label>Hora hasta</label>
					<input type="time" name="hora_hasta" id="hora_hasta" class="form-control" value="{{$rango_horario->hora_hasta}}">
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
