@extends('layouts.admin')


@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo Pais</b></h3>
		</div>		
	</div>

	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<form method="POST" autocomplete="off"  action="{{route('escuela.paises.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}


				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					
							
						<div class="form-group">
							<label for="nombre_pais">Pais:</label>
							<input type="text" id="nombre_pais" name="nombre_pais" class="form-control" placeholder="">
						</div>


						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.paises.index')}}" class="btn btn-default">Cancelar</a>

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
      $("#nombre_pais").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection