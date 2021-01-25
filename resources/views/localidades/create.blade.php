@extends('layouts.admin')


@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nueva localidad</b></h3>
		</div>		
	</div>

	<form method="POST" autocomplete="off"  action="{{route('escuela.localidades.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}


				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					

						<div class="form-group">
							<label for="nombre_provincia">Provincia</label>
							<select name="id_provincia" class="form-control selectpicker" id="id_provincia" data-live-search="true">
							<option value="--Select--">--Seleccionar--</option>

						<br>
								@foreach($provincias as $provincias)
									<option value="{{ $provincias->id_provincia }}">  {{ $provincias->nombre_provincia }}</option>
								@endforeach

							</select>
						<br>	
						<br>
						<div class="form-group">
							<label for="nombre_localidad">Localidad</label>
							<input type="text" name="nombre_localidad" id="nombre_localidad" class="form-control" placeholder=""required>
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.localidades.index')}}" class="btn btn-default">Cancelar</a>

						</div>			
      				</div>

      				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
      					<div class="content">         
            			
            			
      					</div>
      				</div>
      			
</form>


@endsection
@section('js')
<script>
	
  $(document).ready( function () {
      $("#nombre_localidad").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection