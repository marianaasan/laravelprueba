@extends('layouts.admin')


@section('content')

<div class= 'container'>

	@if (count ($errors)>0)

	<div class ="alert alert-danger" role ="alert">
	<ul>
		@foreach ($errors->all() as $error)
			<li> {{$error}} <li>
		@endforeach

	<ul>
</div>
	@endif

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo Sexo</b></h3>
		</div>		
	</div>

	<form method="POST" autocomplete="off"  action="{{route('escuela.sexos.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}


				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					
							
						<div class="form-group">
							<label for="descripcion">Descripcion:</label>
							<input type="text" name="descripcion" id="descripcion" class="form-control" placeholder=""required>
							
							<label for="sigla">Sigla:</label>
							<input type="text" name="sigla" id="sigla" class="form-control" placeholder=""required>
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.sexos.index')}}" class="btn btn-default">Cancelar</a>

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
      $("#descripcion").on("keypress", function (){
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });
$(document).ready( function () {
      $("#sigla").on("keypress", function (){
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });
</script>

@endsection
