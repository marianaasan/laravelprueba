<div class="modal fade" id="eliminarIdiomas">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar idioma</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/escuela/idiomaseliminar/{{$idiomas->id_idioma}} " method="get" id="formDestroyidiomas" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_idioma" value="{{$idiomas->id_idioma}}">
				<div class="form-group">
					<label>Idioma</label>
					{{$idiomas->idioma}}
					
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