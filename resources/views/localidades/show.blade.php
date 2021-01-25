@extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Localidades</strong></div>
			  <div class="content"> 
		
				<div class="form-group">
					<label>Provincia:</label>
					{!!$localidades[0]->provincias!!}
				</div>	
			  	

			  	<div class="form-group">
					<label>Localidad:</label>
					{!!$localidades[0]->localidades!!}
				</div>
				

				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarLocalidades" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarLocalidades">Eliminar</a>
					
				</div>
			  </div>					
			</div>
			
	
			@include('localidades/edit')	
			@include('localidades/delete')
		</div>

@endsection