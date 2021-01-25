<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos_compromisos;

class Tipos_compromisoscontroller extends Controller
{
 public function index()
    {
         $tipos_compromisos = tipos_compromisos::all (); //all trae todo lo que esta cargado en la tabla//
        return view ('tipos_compromisos.index')->with ('tipos_compromisos', $tipos_compromisos) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tipos_compromisos.create'); //carpeta paises - archivo create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipos_compromisos = new Tipos_compromisos();
        $tipos_compromisos->descripcion=$request->descripcion; 
        $tipos_compromisos->save();
        $tipos_compromisos = Tipos_compromisos::all();
        //flash ('Se ha registrado un pais', 'info'); 
        return redirect()->route('escuela.tipos_compromisos.index')->with('tipos_compromisos', $tipos_compromisos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipos_compromisos=Tipos_compromisos::findOrfail($id);
        return view ('tipos_compromisos.show')->with('tipos_compromisos',$tipos_compromisos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $tipos_compromisos=tipos_compromisos::findOrfail($request->id_tipo_compromiso);
        $tipos_compromisos->descripcion=$request->descripcion;
        $tipos_compromisos->save();
        return redirect()->route('escuela.tipos_compromisos.show',$request->id_tipo_compromiso);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipos_compromisos=tipos_compromisos::findOrfail($id);
        $tipos_compromisos->delete();
        $tipos_compromisos = tipos_compromisos::all ();
       
        return view ('tipos_compromisos.index')->with ('tipos_compromisos', $tipos_compromisos) ;
    }
}
