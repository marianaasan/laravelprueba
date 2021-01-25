<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
use DB;
//use Validator;

class Paisescontroller extends Controller
{
 public function index()
    {
        
        $paises = Paises::all (); //all trae todo lo que esta cargado en la tabla//
        return view ('paises.index')->with ('paises', $paises) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('paises.create'); //carpeta paises - archivo create

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nombre_pais'=>'required']);
       
        //return $request->all (); //request trar todo lo que traigo del formulario//
        $pais=new Paises();
        $pais->nombre_pais=$request->nombre_pais; 
        $pais->save();
        $paises = Paises::all();
        return redirect()->route('escuela.paises.index')->with('paises', $paises);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  
        $paises=Paises::findOrfail($id);
        return view ('paises.show')->with('paises',$paises);
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
        $paises=paises::findOrfail($request->id_pais);
        $paises->nombre_pais=$request->nombre_pais;

        $paises->save();
       // flash("SE HA MODIFICADO CON EXITO!!!","info");
        return redirect()->route('escuela.paises.show',$request->id_pais);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paises=paises::findOrfail($id);
        $paises->delete();
        $paises = paises::all ();
       
        return view ('paises.index')->with ('paises', $paises) ;
    }
}


