@extends('layouts.admin')


@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo tipo de documento</b></h3>
		</div>		
	</div>

	<form method="POST" autocomplete="off"  action="{{route('escuela.tipos documentos.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}


				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					
							
						<div class="form-group">
							<label for="tipo_documento">Tipos de documentos:</label>
							<input type="text" name="tipo_documento" class="form-control" placeholder=""required>

						<div class="form-group">
							<label for="sigla">Sigla:</label>
							<input type="text" name="sigla" class="form-control" placeholder=""required>
						</div>						

				</div>

			

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.tipos documentos.index')}}" class="btn btn-default">Cancelar</a>

						</div>			
      				</div>

      				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
      					<div class="content">         
            			
            			
      					</div>
      				</div>
      			
</form>


@endsection