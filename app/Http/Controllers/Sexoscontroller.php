<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sexos;
use DB;

class Sexoscontroller extends Controller
{
public function index()
    {
        $sexos = Sexos::all (); //all trae todo lo que esta cargado en la tabla//
        return view ('sexos.index')->with ('sexos', $sexos) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('sexos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['descripcion'=>'required','sigla'=>'required|max:1', ]);
       
        $sexos=new Sexos();
        $sexos->descripcion=$request->descripcion;
        $sexos->sigla=$request->sigla;

        $sexos->save();
        $sexos = Sexos::all(); 
        return redirect()->route('escuela.sexos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sexos=sexos::findOrfail($id);
        return view ('sexos.show')->with('sexos',$sexos);
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
        $sexos=sexos::findOrfail($request->id_sexo);
        $sexos->descripcion=$request->descripcion;
        $sexos->sigla=$request->sigla;
        
        $sexos->save();
        //flash("SE HA MODIFICADO CON EXITO!!!","info");
        return redirect()->route('escuela.sexos.show',$request->id_sexo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sexos=sexos::findOrfail($id);
        $sexos->delete();
        $sexos = sexos::all ();
        //Flash ('Se ha eliminado el doc', 'danger');
        return view ('sexos.index')->with ('sexos', $sexos) ;
    }
}


