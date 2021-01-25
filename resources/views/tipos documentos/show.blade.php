
@extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Documento:</strong></div>
			  <div class="content"> 
		

				<div class="form-group">
					<label>Tipo documento:</label>
					{!!$tipos_documentos->tipo_documento!!}
				</div>	

				<div class="form-group">
					<label>Sigla:</label>
					{!!$tipos_documentos->sigla!!}
				</div>	
				

				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificar_tipo_documento" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminar_tipo_documento">Eliminar</a>
					
				</div>
			  </div>					
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            	
      		</div>

			@include('tipos documentos/edit')	
			@include('tipos documentos/delete')

		</div>

@endsection