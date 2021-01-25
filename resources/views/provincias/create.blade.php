@extends('layouts.admin')


@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nueva Provincia</b></h3>
		</div>		
	</div>

	<form method="POST" autocomplete="off"  action="{{route('escuela.provincias.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}

          <div class="form-group">
              <label for="Pais">Pais</label>
              <select name="id_pais" class="form-control selectpicker" id="id_pais"  data-live-search="true" >
                <option value="--Select--">--Seleccionar--</option>
                
                @foreach($paises as $paises)
                  <option value="{{ $paises->id_pais }}"> {{ $paises->nombre_pais }}</option>
                @endforeach
              </select>
            </div>

				  <div class="row">
            <div class="form-group">
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">  
							 <label for="nombre_provincia">Provincia</label>
							 <input type="text" name="nombre_provincia" class="form-control" placeholder=""required>

            </div>
           
            </div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.provincias.index')}}" class="btn btn-default">Cancelar</a>

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
      $("#nombre_provincia").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection