@extends('layouts.admin')
@section('content')

{{-- @include('localidades.create') --}}
<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>      
      <h3>Listado de Localidades</h3>
      <div align="left">
<!-- Button trigger modal -->
		{{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalcreateProveedor">
		  Nuevo
		</button> --}}
		<a href="{{route('escuela.localidades.create')}}">
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

              		{{-- <button class="btn btn-primary btn-sm"  type="button"id="nuevaLocalidad"name="nuevo">Nuevo</button> --}}
       </div>
            <div class="row">  
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">                
                    {{-- <table id="datatable-buttons" class="table table-striped table-bordered" > --}}
                    <table id="tablaLocalidades" class="table table-ligth table-hover">
                      <thead>
                        <tr>
                         
                          <th align="center">Provincias</th> 
                          <th align="center">Localidades</th>     
                          <th align="center">Accion</th>
                        </tr>
                      </thead>
                      <tbody>

                       @foreach($localidades as  $loc)
                       
                <tr>
                            
                            <td align="center">{{$loc->provincias}}</td> 
                            <td align="center">{{$loc->localidades}}</td>      
                            <td align="center">

	                     <a href="{{route('escuela.localidades.show',$loc->id_localidad)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
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
    $('#tablaLocalidades').DataTable();
} );
@endsection
