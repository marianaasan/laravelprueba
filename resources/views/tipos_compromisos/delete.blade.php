<div class="modal fade" id="eliminarTipos_compromisos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar tipo compromiso</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/tipos_compromisoseliminar/{{$tipos_compromisos->id_tipo_compromiso}} " method="get" id="formDestroytipos_compromisos" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_rol" value="{{$tipos_compromisos->id_tipo_compromiso}}">
				<div class="form-group">
					<label>Tipo compromiso</label>
					{{$tipos_compromisos->descripcion}}
					
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