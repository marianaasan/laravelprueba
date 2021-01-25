<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aulas;
use DB;


class Aulascontroller extends Controller
{
		public function index()
    {
        $aulas = aulas::all (); 
        return view ('aulas.index')->with ('aulas', $aulas) ;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create()
    {
        return view ('aulas.create');
    }

public function store(Request $request)
    {
        $aulas=new Aulas();
        $aulas->nombre=$request->nombre;
        $aulas->capacidad=$request->capacidad;
      
        $aulas->save();

        $aulas->save();
        return redirect()->route('escuela.aulas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aulas=Aulas::findOrfail($id);
        return view ('aulas.show')->with('aulas',$aulas);
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
        $aulas=new Aulas();
        $aulas->nombre=$request->nombre;
        $aulas->capacidad=$request->capacidad;
        
        $aulas->save();
        return redirect()->route('escuela.aulas.show',$request->id_aula);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aulas=Aulas::findOrfail($id);
        $aulas->delete();
        $aulas = aulas::all ();
       
        return view ('aulas.index')->with ('aulas', $aulas) ;
    }
}












