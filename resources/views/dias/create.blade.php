@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo Dia</b></h3>
		</div>		
	</div>

	<form method="POST" autocomplete="off"  action="{{route('escuela.dias.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}


				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					
							
						<div class="form-group">
							<label for="dia">Dia</label>
							<input type="text" name="dia" id="dia" class="form-control" placeholder=""required>
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.dias.index')}}" class="btn btn-default">Cancelar</a>

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
      $("#dia").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection