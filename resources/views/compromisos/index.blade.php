@extends('layouts.admin')
@section('content')


<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>      
      <h3>Listado de Compromisos</h3>
      <div align="left">
		<a href="{{route('escuela.compromisos.create')}}">
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
                   
                    <table id="tablaCompromisos" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          
                          <th align="center">Tipo compromiso</th>
                          <th align="center">Monto total</th>                         
                          <th align="center">Fecha inicio</th>
                          <th align="center">Fecha fin</th>
                          <th align="center">Disposición</th>
                          <th align="center">Número de contrato</th>
                      

                        </tr>
                      </thead>
                      <tbody>

	           @foreach($compromisos as $compromisos)
	                
	   						<tr>
                          <td align="center">{{$compromisos->tipos_compromisos}}</td>
                          <td align="center">{{$compromisos->monto_total}}</td>
                          <td align="center">{{$compromisos->fecha_inicio}}</td>
                          <td align="center">{{$compromisos->fecha_fin}}</td>
                          <td align="center">{{$compromisos->disposicion}}</td>
                          <td align="center">{{$compromisos->nro_contrato}}</td>
                       
                          <td align="center">       
	                        
	<a href="{{route('escuela.compromisos.show',$compromisos->id_compromiso)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
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
    $('#tablaCompromisos').DataTable();
} );
@endsection
