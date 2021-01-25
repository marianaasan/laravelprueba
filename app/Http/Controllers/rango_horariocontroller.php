<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\rango_horario;
use DB;

class rango_horariocontroller extends Controller
{
       public function index()
    {
        
        $rango_horario = rango_horario::all (); //all trae todo lo que esta cargado en la tabla//
        return view ('rango_horario.index')->with ('rango_horario', $rango_horario) ;
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        	return view ('rango_horario.create'); //carpeta paises - archivo create
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
        $rango_horario=new rango_horario();
        $rango_horario->hora_desde=$request->hora_desde; 
 		$rango_horario->hora_hasta=$request->hora_hasta; 
        $rango_horario->save();
        $rango_horario = rango_horario::all();
        return redirect()->route('escuela.rango_horario.index')->with('rango_horario', $rango_horario);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  
        $rango_horario=rango_horario::findOrfail($id);
        return view ('rango_horario.show')->with('rango_horario',$rango_horario);
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
        $rango_horario=rango_horario::findOrfail($request->id_rango_horario);
        $rango_horario->hora_desde=$request->hora_desde;
        $rango_horario->hora_hasta=$request->hora_hasta;

        $rango_horario->save();
       // flash("SE HA MODIFICADO CON EXITO!!!","info");
        return redirect()->route('escuela.rango_horario.show',$request->id_rango_horario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rango_horario=rango_horario::findOrfail($id);
        $rango_horario->delete();
        $rango_horario = rango_horario::all ();
       
        return view ('rango_horario.index')->with ('rango_horario', $rango_horario) ;
    }
}
