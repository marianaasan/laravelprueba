<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Escuela de Inglés y Portugués</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="/css/multiselect.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}">

  <!--calcular edad -->
   <!-- <link rel="stylesheet" type="text/css" href=" {{asset('js/jquery-ui-1.12.1.custom/jquery-ui.css')}}">-->

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/grafica" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ex</b>Gr</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Administración</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- <small class="bg-red">Online</small> 
                  <span class="hidden-xs">Gomez Walter Samuel</span> -->
                      
                    <img src="#" style="width: 43px; height: 43px; ">
                    
                </a>

                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      Mariana Santana
                      <small></small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Contratos/becas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li><a href="{{route('escuela.compromisos.index') }}"><i class="fa fa-circle-o"></i> Compromisos</a></li>
                <li><a href="{{route('escuela.certificados.index') }}"><i class="fa fa-circle-o"></i> Certficados</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Parámetros</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('escuela.tipos documentos.index') }}"><i class="fa fa-circle-o"></i>Tipos de documentos</a></li>
                <li><a href="{{route('escuela.sexos.index') }}"><i class="fa fa-circle-o"></i>Sexos</a></li>
                <li><a href="{{route('escuela.aulas.index') }}"><i class="fa fa-circle-o"></i>Aulas</a></li>
                <li><a href="{{route('escuela.dias.index') }}"><i class="fa fa-circle-o"></i>Días</a></li>
                 <li><a href="{{route('escuela.rango_horario.index') }}"><i class="fa fa-circle-o"></i>Rango horario</a></li>
                <li><a href="{{route('escuela.roles.index') }}"><i class="fa fa-circle-o"></i>Roles</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Tipos de asistencias</a></li>
                <li><a href="{{route('escuela.tipos_compromisos.index') }}"><i class="fa fa-circle-o"></i>Tipos de compromisos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Tipos de relacion comisiones</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Tipos de relacion personas</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Cursos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               
                <li><a href="{{route('escuela.comisiones.index') }}"><i class="fa fa-circle-o"></i> Comisiones</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Comisiones por día</a></li>
                <li><a href="{{route('escuela.idiomas.index') }}"><i class="fa fa-circle-o"></i> Idiomas</a></li>
                <li><a href="{{route('escuela.niveles.index') }}"><i class="fa fa-circle-o"></i> Niveles</a></li>
                <li><a href="{{route('escuela.cursos.index') }}"><i class="fa fa-circle-o"></i> Cursos</a></li>
                 <li><a href="{{route('escuela.personas.index') }}"><i class="fa fa-circle-o"></i>Personas</a></li>

              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Ubicación</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="{{route('escuela.provincias.index') }}"><i class="fa fa-circle-o"></i>Provincias</a></li>
                <li><a href="{{route('escuela.paises.index') }}"><i class="fa fa-circle-o"></i>Paises</a></li> 
                <li><a href="{{route('escuela.localidades.index') }}"><i class="fa fa-circle-o"></i>Localidades</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Escuela de Inglés y Portugués</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>


                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                    	{{-- 	<div  id="logoGral" class="conteiner">
                    			@include('logoGral')
                    		</div>
 --}}
                           <div id="conteiner" class="col-md-12">
                              <!--Contenido-->
                              @yield('content')
                              <!--Fin Contenido-->
                           </div>
                     </div>
                        
                </div>
               </div><!-- /.row -->
              </div><!-- /.box-body -->
             </div><!-- /.box -->
           </div><!-- /.col -->
         </div><!-- /.row -->

       </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/awesome.js')}}"></script>
    <script src="{{asset('js/multiselect.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <!-- calcular edad -->
  <!--<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>-->
    
     <!-- <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
     </script> -->

    <script type="text/javascript">
      @yield('scrypts')
    </script>

<script type="text/javascript">
	$('#listaProv').click(function(){
		$("#logoGral").attr("hidden",true);
	});
</script>
@yield ('js')
  </body>
</html>
