 @extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Compromisos</strong></div>
			  <div class="content"> 
		
				<div class="form-group">
					<label>Tipos compromisos:</label>
					{!!$compromisos[0]->tipos_compromisos!!}
				</div>	
			  					
				<div class="form-group">
					<label>Monto total:</label>
					{!!$compromisos[0]->monto_total!!}
				</div>	
			  	
			  	<div class="form-group">
					<label>Fecha inicio:</label>
					{!!$compromisos[0]->fecha_inicio!!}
				</div>
				
				<div class="form-group">
					<label>Fecha fin:</label>
					{!!$compromisos[0]->fecha_fin!!}
				</div>

				<div class="form-group">
					<label>Disposicion:</label>
					{!!$compromisos[0]->disposicion!!}
				</div>

				<div class="form-group">
					<label>Número de contrato:</label>
					{!!$compromisos[0]->nro_contrato!!}
				</div>

				<div class="form-group">
					<label>Fecha baja:</label>
					{!!$compromisos[0]->fecha_baja!!}
				</div>

				<div class="form-group">
					<label>Estado:</label>
					{!!$compromisos[0]->estado!!}
				</div>


				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarCompromisos" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarCompromisos">Eliminar</a>
					
				</div>
			  </div>					
			</div>
			
	
			@include('compromisos/edit')	
			@include('compromisos/delete')
		</div>

@endsection