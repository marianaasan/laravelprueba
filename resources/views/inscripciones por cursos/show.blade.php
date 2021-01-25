@extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Idiomas</strong></div>
			  <div class="content"> 
		
				
				<div class="form-group">
					<label>Idioma:</label>
					{!!$idioma->idioma!!}
				</div>


				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarIdioma" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarIdioma">Eliminar</a>
					
				</div>
			  </div>					
			</div>
			
			 {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            	<div class="content">         
            		<img src="#" style="width: 350px; height: 400px; border: 2px solid black">
      			</div>
      		</div>--}}
      		

			@include('idiomas/edit')	
			@include('idiomas/delete')
		</div>

@endsection