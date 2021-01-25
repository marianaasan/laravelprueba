<div class="modal fade" id="eliminar_tipo_documento">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar tipo de documento:</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/tipos documentoseliminar/{{$tipos_documentos->id_tipo_documento}} " method="get" id="formDestroyTipo documento" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_tipo_documento" value="{{$tipos_documentos->id_tipo_documento}}">
				<div class="form-group">
					<label>Tipo documento:</label>
					{{$tipos_documentos->tipo_documento}}
					0
				</div>
				
				<div class="form-group">
					<button class="btn btn-danger" type="submit">Eliminar</button>
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