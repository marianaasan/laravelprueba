<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincias;
use App\Paises;
use DB;

class Provinciascontroller extends Controller
{
 public function index()  // index: Mostrar registros existentes (GET)
    {
        //$paises=paises::all();
        $provincias=DB::table('provincias')->select('provincias.nombre_provincia as provincias','provincias.id_provincia','paises.nombre_pais as paises','paises.id_pais')->join('paises','paises.id_pais','=','provincias.id_pais')->get(); 

        return view('provincias.index')->with('provincias',$provincias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  //create: Mostrar nuevos datos a crear (GET)
    {
         $paises=paises::all();
         return view ('provincias.create')->with ('paises',$paises); //carpeta provincia - archivo create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //store: Crear nuevos datos (POST)
    {
    
        $provincias=new Provincias();
        $provincias->nombre_provincia=$request->nombre_provincia; 
        $provincias->id_pais=$request->id_pais;
        $provincias->save();

        $provincias=DB::table('provincias')->select('provincias.nombre_provincia as provincias','provincias.id_provincia','paises.nombre_pais as paises','paises.id_pais')->join('paises','paises.id_pais','=','provincias.id_pais')->get(); 
         return view("provincias.index")->with('provincias',$provincias);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)  //show: Mostrar un registro (GET)
    {
        
         $provincias=DB::table('provincias')->select('provincias.nombre_provincia as provincias','provincias.id_provincia','paises.nombre_pais as paises','paises.id_pais')->join('paises','paises.id_pais','=','provincias.id_pais')->get(); 
            $paises=paises::all();
            return view('provincias.show')->with('provincias',$provincias)->with('paises',$paises);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)  //edit: Mostrar un registro a modificar (GET)
    {
        
         $provincias = provincias::findOrFail($request->id_provincia);
         return view('provincias.edit')->with('provincias', $provincias);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)  //update: Modificar un registro (PUT)
    {
        
        $provincias=provincias::findOrfail($request->id_provincia);
        $provincias->nombre_provincia=$request->nombre_provincia;
        $provincias->id_pais= $request->id_pais;

        $provincias->save();
        return redirect()->route('escuela.provincias.show',$request->id_provincia);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)  //destroy: Eliminar un registro (DELETE)
    {
        
    $provincias=Provincias::findOrfail($id);
    $provincias->delete();
        $provincias = Provincias::all ();
       
        return view ('provincias.index')->with ('provincias', $provincias) ;
    }
}


