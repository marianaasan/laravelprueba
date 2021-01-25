@extends('layouts.admin')
@section('content')

{{-- @include('dias.create') --}}
<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>      
      <h3>Listado de Niveles</h3>
      <div align="left">

		{{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalcreateProveedor">
		  Nuevo
		</button> --}}
		<a href="{{route('escuela.niveles.create')}}">
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

              		{{-- <button class="btn btn-primary btn-sm"  type="button"id="nuevoNiveles"name="nuevo">Nuevo</button> --}}
       </div>
            <div class="row">  
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">                
                    {{-- <table id="datatable-buttons" class="table table-striped table-bordered" > --}}
                    <table id="tablaNiveles" class="table table-ligth table-hover">
                      <thead>
                        <tr>
                         
                          <th align="center">Nivel</th>     
                          <th align="center">Accion</th>
                        </tr>
                      </thead>
                      <tbody>

                       @foreach($niveles as  $niveles)
                       
                <tr>
                           
                            <td align="center">{{$niveles->nivel}}</td>      
                            <td align="center">

                             <a href="{{route('escuela.niveles.show',$niveles->id_nivel)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
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
    $('#tablaNiveles').DataTable();
} );
@endsection
