@extends('layouts.admin')
@section('content')
	<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Personas:</strong></div>
			  <div class="content"> 
		
				
				<div class="form-group">
					<label>Documento:</label>
					{!!$personas[0]->documento!!}
				</div>
				<div class="form-group">
					<label>Cuit:</label>
					{!!$personas[0]->cuit!!}
				</div>
				<div class="form-group">
					<label>Fecha Nacimiento:</label>
					{!!$personas[0]->fecha_nacimiento!!}
				</div>
				<div class="form-group">
					<label>Nombres:</label>
					{!!$personas[0]->nombres!!}
				</div>
				<div class="form-group">
					<label>Apellidos:</label>
					{!!$personas[0]->apellidos!!}
				</div>
				<div class="form-group">
					<label>Correo:</label>
					{!!$personas[0]->email!!}
				</div>
				<div class="form-group">
					<label>Calle:</label>
					{!!$personas[0]->calle!!}
				</div>
				<div class="form-group">
					<label>Numero:</label>
					{!!$personas[0]->numero!!}
				</div>
				<div class="form-group">
					<label>Departamento:</label>
					{!!$personas[0]->dpto!!}
				</div>
				<div class="form-group">
					<label>Telefono:</label>
					{!!$personas[0]->telefono_fijo!!}
				</div>
				<div class="form-group">
					<label>Celular:</label>
					{!!$personas[0]->telefono_celular!!}
				</div>
				<div class="form-group">
					<label>Condicion:</label>
					{!!$personas[0]->estado!!}
				</div>
				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarPersona" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarPersona" disabled>Dar de Baja</a>
					
				</div>
			  </div>					
			</div>
			
			 {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            	<div class="content">         
            		<img src="#" style="width: 350px; height: 400px; border: 2px solid black">
      			</div>
      		</div>--}}
      		

			@include('personas/edit')	
			@include('personas/delete')
		</div>
@endsection
