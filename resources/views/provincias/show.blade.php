@extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Provincia</strong></div>
			  <div class="content"> 
		
				
				<div class="form-group">
					<label>Pais:</label>
					{!!$provincias->paises!!}
				</div>

				<div class="form-group">
					<label>Provincia:</label>
					{!!$provincia->provincias!!}
				</div>

				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarProvincias" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarProvincias">Eliminar</a>
					
				</div>
			  </div>					
			</div>
			
			 {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            	<div class="content">         
            		<img src="#" style="width: 350px; height: 400px; border: 2px solid black">
      			</div>
      		</div>--}}
      		

			@include('provincias/edit')	
			@include('provincias/delete')
		</div>

@endsection

