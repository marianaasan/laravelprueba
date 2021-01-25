@extends('layouts.admin')
@section('content')

{{-- @include('provincias.create') --}}
<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>      
      <h3>Listado de Provincias</h3>
      <div align="left">
<!-- Button trigger modal -->
		{{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalcreateProveedor">
		  Nuevo
		</button> --}} 
		<a href="{{route('escuela.provincias.create')}}">
  		   <button class="btn btn-success">Nuevo</button>
        </a>
		<hr>
          @if ($errors->any())
                  <div class="alert alert-danger alert-dismissable">
                      <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;
                      </button>
                      <strong>¡Atención!</strong> 
                      <p> Error al cargar los datos </p>
                      <p><h4>Presione el boton Nuevo para verificar el error</h4>  </p>                    
                  </div>
           @endif

              		{{-- <button class="btn btn-primary btn-sm"  type="button"id="nuevaProvincia"name="nuevo">Nuevo</button> --}}
       </div>
            <div class="row">  
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">                
                    {{-- <table id="datatable-buttons" class="table table-striped table-bordered" > --}}
                    <table id="tablaProvincias" class="table table-striped table-bordered" >
                      <thead>
                        <tr>
                          
                          <th align="center">Paises</th>
                          <th align="center">Provincias</th>                         
                          <th align="center">Accion</th>

                        </tr>
                      </thead>
                      <tbody>

	                     @foreach($provincias as  $provincias)
	                     
	   						<tr>
                           
                            <td align="center">{{$provincias->paises}}</td>
                            <td align="center">{{$provincias->provincias}}</td>
                          <td>
 <a href="{{route('escuela.provincias.show',$provincias->id_provincia)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
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
    $('#tablaProvincias').DataTable();
} );
@endsection
