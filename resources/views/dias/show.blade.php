@extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Dias:</strong></div>
			  <div class="content"> 
		
				
				<div class="form-group">
					<label>Dia:</label>
					{!!$dias->dia!!}
				</div>


				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarDia" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarDia">Eliminar</a>
					
				</div>
			  </div>					
			</div>
			
			 {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            	<div class="content">         
            		<img src="#" style="width: 350px; height: 400px; border: 2px solid black">
      			</div>
      		</div>--}}
      		

			@include('dias/edit')	
			@include('dias/delete')
		</div>

@endsection