@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo Rango horario</b></h3>
		</div>		
	</div>


	<form method="POST" autocomplete="off"  action="{{route('escuela.rango_horario.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}


				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">					
							
						<div class="form-group">
							<label for="hora_desde">Hora desde:</label>
							<input type="time" id="hora_desde" name="hora_desde" class="form-control" placeholder="">
						</div>

            <div class="form-group">
              <label for="hora_hasta">Hora hasta:</label>
              <input type="time" id="hora_hasta" name="hora_hasta" class="form-control" placeholder="">
            </div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<a href="{{route('escuela.rango_horario.index')}}" class="btn btn-default">Cancelar</a>

						</div>			
      				</div>

      				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
      					<div class="content">         
            			
            			
      					</div>
      				</div>
      			
</form>

@endsection

@section('scrypts')
console.log ('holaaaaaaaaaaaaaaaaaaaaaaaa');
  $(document).ready(function(){

    var hora1;
    var hora2;
    
    $('#hora_desde').blur(function()
    $('#hora_hasta').blur(function(){
              
      hora1 = new Date($('#hora_desde').val());
      hora2 = new Date($('#hora_hasta').val());

      if (hora2 < hora1){
           alert("La hora inicio no puede ser mayor a la hora fin");

      });
});
});


@endsection