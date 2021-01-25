@extends('layouts.admin')
@section('content')

{{-- @include('paises.create') --}}
<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>      
      <h3>Listado de Roles</h3>
      <div align="left">

 
		<a href="{{route('escuela.roles.create')}}">
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

              		{{-- <button class="btn btn-primary btn-sm"  type="button"id="nuevoPais"name="nuevo">Nuevo</button> --}}
       </div>
            <div class="row">  
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">                
                    {{-- <table id="datatable-buttons" class="table table-striped table-bordered" > --}}
                    <table id="tablaRoles" class="table table-ligth table-hover">
                      <thead>
                        <tr>
                          <th align="center">Roles</th>     
                          <th align="center">Accion</th>
                        </tr>
                      </thead>
                      <tbody>

	                     @foreach($roles as  $rol)
	                     
	   						<tr>
                           
                            <td align="center">{{$rol->tipo_rol}}</td>      
	                          <td align="center">

	                           <a href="{{route('escuela.roles.show',$rol->id_rol)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
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
    $('#tablaRoles').DataTable();
} );
@endsection
