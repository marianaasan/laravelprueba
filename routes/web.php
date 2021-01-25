<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/escuela',function(){ 
	return view ('layouts.admin');
});

/*

|-------------- RANGO HORARIO	 -------------------------------*/

route::get ('escuela/rango_horarioindex',['as'=>'escuela.rango_horario.index' , 'uses'=> 'rango_horariocontroller@index' ] );
route::get ('escuela/rango_horariocreate',['as'=>'escuela.rango_horario.create' , 'uses'=> 'rango_horariocontroller@create' ]);
route::get ('escuela/rango_horarioshow/{id_rango_horario}',['as'=>'escuela.rango_horario.show' , 'uses'=> 'rango_horariocontroller@show' ]);
Route::post('/escuela/rango_horarionew',['as'=>'escuela.rango_horario.store', 'uses'=>'rango_horariocontroller@store']);
route::get ('escuela/rango_horariomodificar',['as'=>'escuela.rango_horario.update' , 'uses'=> 'rango_horariocontroller@update' ]);
route::get ('escuela/rango_horarioeliminar/{id_rango_horario}',['as'=>'escuela.rango_horario.delete' , 'uses'=> 'rango_horariocontroller@destroy']);

/*-------------- PAIS -------------------------------*/

route::get ('escuela/paisesindex',['as'=>'escuela.paises.index' , 'uses'=> 'Paisescontroller@index' ] );
route::get ('escuela/paisescreate',['as'=>'escuela.paises.create' , 'uses'=> 'Paisescontroller@create' ]);
route::get ('escuela/paisesshow/{id_pais}',['as'=>'escuela.paises.show' , 'uses'=> 'Paisescontroller@show' ]);
Route::post('/escuela/paisesnew',['as'=>'escuela.paises.store', 'uses'=>'Paisescontroller@store']);
route::get ('escuela/paisesmodificar',['as'=>'escuela.paises.update' , 'uses'=> 'Paisescontroller@update' ]);
route::get ('escuela/paiseseliminar/{id_pais}',['as'=>'escuela.paises.delete' , 'uses'=> 'Paisescontroller@destroy']);

/*------------------------PROVINCIA------------------*/

route::get ('escuela/provinciasindex',['as'=>'escuela.provincias.index' , 'uses'=> 'Provinciascontroller@index' ] );
route::get ('escuela/provinciascreate',['as'=>'escuela.provincias.create' , 'uses'=> 'Provinciascontroller@create' ]);
route::get ('escuela/provinciasshow/{id_provincia}',['as'=>'escuela.provincias.show' , 'uses'=> 'Provinciascontroller@show' ]);
Route::post('/escuela/provinciasnew',['as'=>'escuela.provincias.store', 'uses'=>'Provinciascontroller@store']);
route::get ('escuela/provinciasmodificar',['as'=>'escuela.provincias.update' , 'uses'=> 'Provinciascontroller@update' ]);
route::get ('escuela/provinciaseliminar/{id_provincia}',['as'=>'escuela.provincias.delete' , 'uses'=> 'Provinciascontroller@destroy']);

/*------------------------LOCALIDAD------------------*/

route::get ('escuela/localidadesindex',['as'=>'escuela.localidades.index' , 'uses'=> 'Localidadescontroller@index' ] );
route::get ('escuela/localidadescreate',['as'=>'escuela.localidades.create' , 'uses'=> 'Localidadescontroller@create' ]);
route::get ('escuela/localidadesshow/{id_localidad}',['as'=>'escuela.localidades.show' , 'uses'=> 'Localidadescontroller@show' ]);
Route::post('/escuela/localidadesnew',['as'=>'escuela.localidades.store', 'uses'=>'Localidadescontroller@store']);
route::get ('escuela/localidadesmodificar',['as'=>'escuela.localidades.update' , 'uses'=> 'Localidadescontroller@update' ]);
route::get ('escuela/localidadeseliminar/{id_localidad}',['as'=>'escuela.localidades.delete' , 'uses'=> 'Localidadescontroller@destroy']);

/*------------------------IDIOMA------------------*/

route::get ('escuela/idiomasindex',['as'=>'escuela.idiomas.index' , 'uses'=> 'Idiomascontroller@index' ] );
route::get ('escuela/idiomascreate',['as'=>'escuela.idiomas.create' , 'uses'=> 'Idiomascontroller@create' ]);
route::get ('escuela/idiomasshow/{id_idioma}',['as'=>'escuela.idiomas.show' , 'uses'=> 'Idiomascontroller@show' ]);
Route::post('/escuela/idiomasnew',['as'=>'escuela.idiomas.store', 'uses'=>'Idiomascontroller@store']);
route::get ('escuela/idiomasmodificar',['as'=>'escuela.idiomas.update' , 'uses'=> 'Idiomascontroller@update' ]);
route::get ('escuela/idiomaseliminar/{id_idioma}',['as'=>'escuela.idiomas.delete' , 'uses'=> 'Idiomascontroller@destroy']);

/*------------------------NIVELES------------------*/

route::get ('escuela/nivelesindex',['as'=>'escuela.niveles.index' , 'uses'=> 'Nivelescontroller@index' ] );
route::get ('escuela/nivelescreate',['as'=>'escuela.niveles.create' , 'uses'=> 'Nivelescontroller@create' ]);
route::get ('escuela/nivelesshow/{id_nivel}',['as'=>'escuela.niveles.show' , 'uses'=> 'Nivelescontroller@show' ]);
Route::post('/escuela/nivelesnew',['as'=>'escuela.niveles.store', 'uses'=>'Nivelescontroller@store']);
route::get ('escuela/nivelesmodificar',['as'=>'escuela.niveles.update' , 'uses'=> 'Nivelescontroller@update' ]);
route::get ('escuela/niveleseliminar/{id_nivel}',['as'=>'escuela.niveles.delete' , 'uses'=> 'Nivelescontroller@destroy']);

/*------------------------CURSOS------------------*/

route::get ('escuela/cursosindex',['as'=>'escuela.cursos.index' , 'uses'=> 'Cursoscontroller@index' ] );
/*route::get ('escuela/cursoscreate',['as'=>'escuela.cursos.create' , 'uses'=> 'Cursoscontroller@create' ]);
route::get ('escuela/cursosshow/{id_curso}',['as'=>'escuela.cursos.show' , 'uses'=> 'Cursoscontroller@show' ]);
Route::post('/escuela/cursosnew',['as'=>'escuela.cursos.store', 'uses'=>'Cursoscontroller@store']);
route::get ('escuela/cursosmodificar',['as'=>'escuela.Cursos.update' , 'uses'=> 'Cursoscontroller@update' ])
/*------------------------AULAS------------------*/

route::get ('escuela/aulasindex',['as'=>'escuela.aulas.index' , 'uses'=> 'Aulascontroller@index' ] );
route::get ('escuela/aulascreate',['as'=>'escuela.aulas.create' , 'uses'=> 'Aulascontroller@create' ]);
route::get ('escuela/aulasshow/{id_aula}',['as'=>'escuela.aulas.show' , 'uses'=> 'Aulascontroller@show']);
Route::post('/escuela/aulasnew',['as'=>'escuela.aulas.store', 'uses'=>'Aulascontroller@store']);
route::get ('escuela/aulasmodificar',['as'=>'escuela.Aulas.update' , 'uses'=> 'Aulascontroller@update' ]);
route::get ('escuela/aulaseliminar/{id_aula}',['as'=>'escuela.aulas.delete' , 'uses'=> 'Aulascontroller@destroy']);

/*------------------------ASISTENCIAS------------------*/

route::get ('escuela/asistenciasindex',['as'=>'escuela.asistencias.index' , 'uses'=> 'Asistenciascontroller@index' ] );
/*route::get ('escuela/asistenciascreate',['as'=>'escuela.asistencias.create' , 'uses'=> 'Asistenciascontroller@create' ]);
route::get ('escuela/asistenciasshow/{id_asistencia}',['as'=>'escuela.asistencias.show' , 'uses'=> 'Asistenciascontroller@show' ]);
Route::post('/escuela/asistenciasnew',['as'=>'escuela.asistencias.store', 'uses'=>'Asistenciascontroller@store']);
route::get ('escuela/asistenciasmodificar',['as'=>'escuela.Asistencias.update' , 'uses'=> 'Asistenciascontroller@update' ])

/*------------------------CERTIFICADOS------------------*/

route::get ('escuela/certificadosindex',['as'=>'escuela.certificados.index' , 'uses'=> 'Certificadoscontroller@index' ] );
/*route::get ('escuela/certificadoscreate',['as'=>'escuela.certificados.create' , 'uses'=> 'Certificadoscontroller@create' ]);
route::get ('escuela/certificadosshow/{id_certificado}',['as'=>'escuela.certificados.show' , 'uses'=> 'Certificadoscontroller@show' ]);
Route::post('/escuela/certificadosnew',['as'=>'escuela.certificados.store', 'uses'=>'Certificadoscontroller@store']);
route::get ('escuela/certificadosmodificar',['as'=>'escuela.Certficados.update' , 'uses'=> 'Certificadoscontroller@update' ])

/*------------------------COMISIONES------------------*/

route::get ('escuela/comisionesindex',['as'=>'escuela.comisiones.index' , 'uses'=> 'Comisionescontroller@index' ] );
/*route::get ('escuela/comisionescreate',['as'=>'escuela.comisiones.create' , 'uses'=> 'Comisionescontroller@create' ]);
route::get ('escuela/comisionesshow/{id_comision}',['as'=>'escuela.comisiones.show' , 'uses'=> 'Comisionescontroller@show' ]);
Route::post('/escuela/comisionesnew',['as'=>'escuela.comisiones.store', 'uses'=>'Comisionescontroller@store']);
route::get ('escuela/comisionesmodificar',['as'=>'escuela.Comisiones.update' , 'uses'=> 'Comisionescontroller@update' ])
/*------------------------SEXOS------------------*/

route::get ('escuela/sexosindex',['as'=>'escuela.sexos.index' , 'uses'=> 'Sexoscontroller@index' ] );
route::get ('escuela/sexoscreate',['as'=>'escuela.sexos.create' , 'uses'=> 'Sexoscontroller@create' ]);
route::get ('escuela/sexosshow/{id_sexo}',['as'=>'escuela.sexos.show' , 'uses'=> 'Sexoscontroller@show' ]);
Route::post('/escuela/sexosnew',['as'=>'escuela.sexos.store', 'uses'=>'Sexoscontroller@store']);
route::get ('escuela/sexosmodificar',['as'=>'escuela.sexos.update' , 'uses'=> 'Sexoscontroller@update' ]);
route::get ('escuela/sexoseliminar/{id_sexo}',['as'=>'escuela.sexos.delete' , 'uses'=> 'Sexoscontroller@destroy' ]);

/*------------------------TIPO DOCUMENTOS------------------*/

route::get ('escuela/tipos documentosindex',['as'=>'escuela.tipos documentos.index' , 'uses'=> 'Tipos_documentoscontroller@index' ] );
route::get ('escuela/tipos documentoscreate',['as'=>'escuela.tipos documentos.create' , 'uses'=> 'Tipos_documentoscontroller@create' ]);
route::get ('escuela/tipos documentosshow/{id_tipo_documento}',['as'=>'escuela.tipos documentos.show' , 'uses'=> 'Tipos_documentoscontroller@show' ]);
Route::post('/escuela/tipos documentosnew',['as'=>'escuela.tipos documentos.store', 'uses'=>'Tipos_documentoscontroller@store']);
route::get ('escuela/tipos documentosmodificar',['as'=>'escuela.tipos documentos.update' , 'uses'=> 'Tipos_documentoscontroller@update' ]);
route::get ('escuela/tipos documentoseliminar/{id_tipo_documento}',['as'=>'escuela.tipos documentos.delete' , 'uses'=> 'Tipos_documentoscontroller@destroy' ]);
 

/*------------------------PERSONAS------------------*/

route::get ('escuela/personasindex',['as'=>'escuela.personas.index' , 'uses'=> 'Personascontroller@index' ] );
route::get ('escuela/personascreate',['as'=>'escuela.personas.create' , 'uses'=> 'Personascontroller@create' ]);
route::get ('escuela/personasshow/{id_persona}',['as'=>'escuela.personas.show' , 'uses'=> 'Personascontroller@show' ]);
Route::post('/escuela/personasnew',['as'=>'escuela.personas.store', 'uses'=>'Personascontroller@store']);
route::get ('escuela/personasmodificar',['as'=>'escuela.personas.update' , 'uses'=> 'Personascontroller@update' ]);

/*-------Dias-------------*/
route::get ('escuela/diasindex',['as'=>'escuela.dias.index' , 'uses'=> 'Diascontroller@index' ] );
route::get ('escuela/diascreate',['as'=>'escuela.dias.create' , 'uses'=> 'Diascontroller@create' ]);
route::get ('escuela/diasshow/{id_dia}',['as'=>'escuela.dias.show' , 'uses'=> 'Diascontroller@show']);
Route::post('/escuela/diasnew',['as'=>'escuela.dias.store', 'uses'=>'Diascontroller@store']);
route::get ('escuela/diasmodificar',['as'=>'escuela.dias.update' , 'uses'=> 'Diascontroller@update' ]);
route::get ('escuela/diaseliminar/{id_dia}',['as'=>'escuela.dias.delete' , 'uses'=> 'Diascontroller@destroy']);

/*-------Roles-------------*/
route::get ('escuela/rolesindex',['as'=>'escuela.roles.index' , 'uses'=> 'Rolescontroller@index' ] );
route::get ('escuela/rolescreate',['as'=>'escuela.roles.create' , 'uses'=> 'Rolescontroller@create' ]);
route::get ('escuela/rolesshow/{id_rol}',['as'=>'escuela.roles.show' , 'uses'=> 'Rolescontroller@show']);
Route::post('/escuela/rolesnew',['as'=>'escuela.roles.store', 'uses'=>'Rolescontroller@store']);
route::get ('escuela/rolesmodificar',['as'=>'escuela.roles.update' , 'uses'=> 'Rolescontroller@update' ]);
route::get ('escuela/roleseliminar/{id_rol}',['as'=>'escuela.roles.delete' , 'uses'=> 'Rolescontroller@destroy' ]);

/*------------------Tipos compromisos-----------*/

route::get ('escuela/tipos_compromisosindex',['as'=>'escuela.tipos_compromisos.index' , 'uses'=> 'Tipos_compromisoscontroller@index' ] );
route::get ('escuela/tipos_compromisoscreate',['as'=>'escuela.tipos_compromisos.create' , 'uses'=> 'Tipos_compromisoscontroller@create' ]);
route::get ('escuela/tipos_compromisosshow/{id_tipo_compromiso}',['as'=>'escuela.tipos_compromisos.show' , 'uses'=> 'Tipos_compromisoscontroller@show']);
Route::post('/escuela/tipos_compromisosnew',['as'=>'escuela.tipos_compromisos.store', 'uses'=>'tipos_compromisoscontroller@store']);
route::get ('escuela/tipos_compromisosmodificar',['as'=>'escuela.tipos_compromisos.update' , 'uses'=> 'Tipos_compromisoscontroller@update' ]);
route::get ('escuela/tipos_compromisoseliminar/{id_tipo_compromiso}',['as'=>'escuela.tipos_compromisos.delete' , 'uses'=> 'Tipos_compromisoscontroller@destroy' ]); 

/*---Compromisos----------------------------------*/
route::get ('escuela/Compromisosindex',['as'=>'escuela.compromisos.index','uses'=>'Compromisoscontroller@index']);
route::get ('escuela/compromisoscreate',['as'=>'escuela.compromisos.create','uses'=>'Compromisoscontroller@create']);
route::get ('escuela/compromisosshow/{id_compromiso}',['as'=>'escuela.compromisos.show','uses'=>'Compromisoscontroller@show']);
Route::post('/escuela/compromisosnew',['as'=>'escuela.compromisos.store', 'uses'=>'Compromisoscontroller@store']);
route::get ('escuela/compromisosmodificar',['as'=>'escuela.compromisos.update' , 'uses'=> 'Compromisoscontroller@update' ]);
route::get ('escuela/compromisoseliminar/{id_compromiso}',['as'=>'escuela.compromisos.delete' , 'uses'=> 'Compromisoscontroller@destroy' ]); 

/*------------------------PERSONAS COMPROMISOS------------------*/

route::get ('escuela/personas_compromisosindex',['as'=>'escuela.personas_compromisos.index' , 'uses'=> 'Personas_compromisoscontroller@index' ] );
route::get ('escuela/personas_compromisoscreate',['as'=>'escuela.personas_compromisos.create' , 'uses'=> 'Personas_compromisoscontroller@create' ]);
route::get ('escuela/personas_compromisosshow/{id_persona_compromiso}',['as'=>'escuela.personas_compromisos.show' , 'uses'=> 'Personas_compromisoscontroller@show' ]);
Route::post('/escuela/personas_compromisosnew',['as'=>'escuela.personas_compromisos.store', 'uses'=>'Personas_compromisoscontroller@store']);
route::get ('escuela/personas_compromisosmodificar',['as'=>'escuela.personas_compromisos.update' , 'uses'=> 'Personas_compromisoscontroller@update' ]);
