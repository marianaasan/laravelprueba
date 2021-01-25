@extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos rango horario</strong></div>
			  <div class="content"> 
		
				
				<div class="form-group">
					<label>Hora desde:</label>
					{!!$rango_horario->hora_desde!!}
				</div>

				<div class="form-group">
					<label>Hora hasta:</label>
					{!!$rango_horario->hora_hasta!!}
				</div>


				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarRangohorario" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarRango_horario">Eliminar</a>
					
				</div>
			  </div>					
			</div>
			

			@include('rango_horario/edit')	
			@include('rango_horario/delete')
		</div>

@endsection