 @extends('layouts.admin')
@section('content')

{{-- @include('provincias.create') --}}
<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>      
      <h3>Listado de Personas</h3>
      <div align="left">
<!-- Button trigger modal -->
		{{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalcreateProveedor">
		  Nuevo
		</button> --}} 
		<a href="{{route('escuela.personas.create')}}">
  		   <button class="btn btn-success">Nuevo</button>
        </a>
		<hr>
          @if ($errors->any())
                  <div class="alert alert-danger alert-dismissable">
                      <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;
                      </button>
                      <strong>¡Atención!</strong> 
                      <p> Error al cargar los datos </p>
                      <p><h4>Presione el boton Nuevo para verificar el error</h4></p>                    
                  </div>
           @endif
       </div>
            <div class="row">  
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">                
                    {{-- <table id="datatable-buttons" class="table table-striped table-bordered" > --}}
                    <table id="tablaPersonas" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          
                          
                          <th align="center">Documento</th>                         
                          <th align="center">Cuit</th>
                          <th align="center">Apellidos</th>
                          <th align="center">Nombres</th>
                          <th align="center">Fecha de nacimiento</th>
                          <th align="center">Calle</th>
                        
                          <th align="center">email</th>
                         
                          <th align="center">Accion</th>

                        </tr>
                      </thead>
                      <tbody>

	           @foreach($personas as $personas)
	                
	   						<tr>
  
                          <td align="center">{{$personas->documento}}</td>
                          <td align="center">{{$personas->cuit}}</td>
                          <td align="center">{{$personas->apellidos}}</td>
                          <td align="center">{{$personas->nombres}}</td>
                          <td align="center">{{$personas->fecha_nacimiento}}</td>
                          <td align="center">{{$personas->calle}}</td>                        
                          <td align="center">{{$personas->email}}</td>                          
                          <td align="center">                        
	                         <a href="{{route('escuela.personas.show',$personas->id_persona)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
	                         </td>
	               </tr>
	         @endforeach                                
                        
                      
                    </table>
                 
                </div>
              </div>
            </div> 
          </div>
  </div>
@endsection

@section('scrypts')	
	 $(document).ready( function () {
            $('#tablaPersonas').DataTable();
        } );
@endsection
