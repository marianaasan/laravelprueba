@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo idioma</b></h3>
		</div>		
	</div>

	<form method="POST" autocomplete="off"  action="{{route('escuela.idiomas.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}

				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					
							
						<div class="form-group"> 
							<label for="idioma">Idioma</label>
							<input type="text" name="idioma" id="idioma" class="form-control" placeholder=""required>
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.idiomas.index')}}" class="btn btn-default">Cancelar</a>

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
      $("#idioma").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection