<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localidades; 
use App\Provincias;
use DB;

class Localidadescontroller extends Controller
{
   public function index()
    {
        $provincias=provincias::all();
        $localidades=DB::table('localidades')->select('localidades.nombre_localidad as localidades','localidades.id_localidad','provincias.nombre_provincia as provincias','provincias.id_provincia')->join('provincias','provincias.id_provincia','=','localidades.id_provincia')->get(); 

        return view('localidades.index')->with('localidades',$localidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias=provincias::all();
         return view ('localidades.create')->with ('provincias',$provincias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $localidades=new Localidades();
        $localidades->nombre_localidad=$request->nombre_localidad; 
        $localidades->id_provincia=$request->id_provincia;
        $localidades->save();

        $localidades=DB::table('localidades')->select('localidades.nombre_localidad as localidades','localidades.id_localidad','provincias.nombre_provincia as provincias','provincias.id_provincia')->join('provincias','provincias.id_provincia','=','localidades.id_provincia')->get(); 
        
         return view("localidades.index")->with('localidades',$localidades);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $localidades=DB::table('localidades')->select('localidades.nombre_localidad as localidades','localidades.id_localidad','provincias.nombre_provincia as provincias','provincias.id_provincia')->join('provincias','provincias.id_provincia','=','localidades.id_provincia')->get(); 

        $provincias=provincias::all();

    return view('localidades.show')->with('localidades',$localidades)->with('provincias',$provincias);
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
        
        $localidades=Localidades::findOrfail($request->id_localidad);
        $localidades->nombre_localidad=$request->nombre_localidad;

        $localidades->save();
        return redirect()->route('escuela.localidades.show',$request->id_localidad);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
        $localidades=localidades::findOrfail($id);
        $localidades->delete();
        $localidades = localidades::all ();
       
        return view ('localidades.index')->with ('localidades', $localidades) ;
    }
        
    }



