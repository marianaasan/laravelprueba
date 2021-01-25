<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personas; 
use DB;
use App\Tipos_documentos; 
use App\Sexos; 
use App\Localidades;
use Carbon\Carbon;
class Personascontroller extends Controller
{
   public function index()
    {
       $personas=DB::table('personas')->select('personas.*','localidades.nombre_localidad as localidad','sexos.descripcion','tipos_documentos.sigla as sigla')->join('localidades','localidades.id_localidad','=','personas.id_localidad')->join('sexos','sexos.id_sexo','=','personas.id_sexo')->join('tipos_documentos','tipos_documentos.id_tipo_documento','=','personas.id_tipo_documento')->get();
            //return $personas;
        return view('personas.index')->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_documentos=Tipos_documentos::all();
        $sexos=Sexos::all();
        $localidades=Localidades::all();
     return view ('personas.create')->with('localidades',$localidades)->with ('tipos_documentos',$tipos_documentos)->with('sexos',$sexos);
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
        'nombres' => 'required|max:255',
        'apellidos' => 'required|max:255',
        'fecha_nacimiento' => 'required|date|date_format:Y-m-d',
    ]);
        $personas=new personas();
        $personas->id_tipo_documento=$request->id_tipo_documento;
        $personas->documento=$request->documento;
        $personas->cuit=$request->cuit;
        $personas->apellidos=$request->apellidos;
        $personas->nombres=$request->nombres;
        $personas->fecha_nacimiento=$request->fecha_nacimiento;
        $personas->id_sexo=$request->id_sexo;
        $personas->id_localidad=$request->id_localidad;
        $personas->domicilio=$request->domicilio;
        $personas->email=$request->email;
        $personas->telefono_fijo=$request->telefono_fijo;
        $personas->telefono_celular=$request->telefono_celular;
        $personas->save();
        
        return redirect()->route('escuela.personas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
       // return $id->all();
        $personas=personas::findOrfail($id);
        $tipos_documentos=Tipos_documentos::all();
        $sexos=Sexos::all();
        $localidades=Localidades::all();
 $personas=DB::table('personas')->select('personas.*','localidades.nombre_localidad','tipos_documentos.sigla','sexos.descripcion')->join('localidades','localidades.id_localidad','=','personas.id_localidad')->join('sexos','sexos.id_sexo','=','personas.id_sexo')->join('tipos_documentos','tipos_documentos.id_tipo_documento','=','personas.id_tipo_documento')->get(); 
        
        return view('personas.show')->with('personas',$personas)->with('localidades',$localidades)->with('sexos',$sexos)->with('tipos_documentos',$tipos_documentos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $personas=personas::findOrfail($request->id_persona);
        $personas->id_tipo_documento=$request->id_tipo_documento;
        $personas->documento=$request->documento;
        $personas->cuit=$request->cuit;
        $personas->apellidos=$request->apellidos;
        $personas->nombres=$request->nombres;
        $personas->fecha_nacimiento=$request->fecha_nacimiento;
        $personas->id_sexo=$request->id_sexo;
        $personas->id_localidad=$request->id_localidad;
        $personas->domicilio=$request->domicilio;
        $personas->email=$request->email;
        $personas->telefono_fijo=$request->telefono_fijo;
        $personas->telefono_celular=$request->telefono_celular;

        $personas->save();
        return redirect()->route('escuela.personas.show',$request->id_persona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}