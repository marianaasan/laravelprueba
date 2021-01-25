@extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Sexos</strong></div>
			  <div class="content"> 
		

				<div class="form-group">
					<label>Descripcion:</label>
					{!!$sexos->descripcion!!}
				</div>	
				
				<div class="form-group">
					<label>Sigla:</label>
					{!!$sexos->sigla!!}
				</div>


				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarSexos" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarSexos">Eliminar</a>
					
				</div>
			  </div>					
			</div>
	
			@include('sexos/edit')	
			@include('sexos/delete')

		</div>

@endsection