<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos_documentos;

class Tipos_documentoscontroller extends Controller
{
 public function index()
    {
        $tipo_documento = tipos_documentos::all (); //all trae todo lo que esta cargado en la tabla//
        return view ('tipos documentos.index')->with ('tipo_documento', $tipo_documento) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tipos documentos.create'); //carpeta tipo doc - archivo create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        //return $request->all (); //request trar todo lo que traigo del formulario//
        $tipo_documento=new Tipos_documentos();
        $tipo_documento->tipo_documento=$request->tipo_documento; 
        $tipo_documento->sigla=$request->sigla; 
        $tipo_documento->save();
        $tipo_documento = Tipos_documentos::all();
        return redirect()->route('escuela.tipos documentos.index')->with('tipo_documento', $tipo_documento);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipos_documentos=Tipos_documentos::findOrfail($id);
        return view ('tipos documentos.show')->with('tipos_documentos',$tipos_documentos);

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
        $tipos_documentos=tipos_documentos::findOrfail($request->id_tipo_documento);
        $tipos_documentos->tipo_documento=$request->tipo_documento;
        $tipos_documentos->sigla=$request->sigla;
        $tipos_documentos->save();
        //Flash("SE HA MODIFICADO CON EXITO!!!","info");

        return redirect()->route('escuela.tipos documentos.show',$request->id_tipo_documento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tipo_documento=tipos_documentos::findOrfail($id);
        $tipo_documento->delete();
        $tipo_documento = tipos_documentos::all ();
        //Flash ('Se ha eliminado el doc', 'danger');
        return view ('tipos documentos.index')->with ('tipo_documento', $tipo_documento) ;

    }

}
