@extends('layouts.admin')


@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo tipo compromiso</b></h3>
		</div>		
	</div>

	<form method="POST" autocomplete="off"  action="{{route('escuela.tipos_compromisos.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}


				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					
							
						<div class="form-group">
							<label for="descripcion">Tipo compromiso:</label>
							<input type="text" name="descripcion" id="descripcion" class="form-control" placeholder=""required>
						</div>

			

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.tipos_compromisos.index')}}" class="btn btn-default">Cancelar</a>

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
      $("#descripcion").on("keypress", function ()
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection