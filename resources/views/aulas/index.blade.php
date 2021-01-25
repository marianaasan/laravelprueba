@extends('layouts.admin')
@section('content')

{{-- @include('dias.create') --}}
<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>      
      <h3>Listado de Aulas</h3>
      <div align="left">

		{{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalcreateProveedor">
		  Nuevo
		</button> --}}
		<a href="{{route('escuela.aulas.create')}}">
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
                    <table id="tablaAulas" class="table table-ligth table-hover">
                      <thead>
                        <tr>
                         
                          <th align="center">Nombre</th>     
                          <th align="center">Capacidad</th>     
                          <th align="center">Accion</th>
                        </tr>
                      </thead>
                      <tbody>

                       @foreach($aulas as  $aulas)
                       
                <tr>
                           
                            <td align="center">{{$aulas->nombre}}</td>  
                            <td align="center">{{$aulas->capacidad}}</td> 
                            <td align="center">

                             <a href="{{route('escuela.aulas.show',$aulas->id_aula)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                       @endforeach                                 
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>  
@endsection

@section('scrypts')
	

	$(document).ready( function () {
    $('#tablaAulas').DataTable();
} );
@endsection
