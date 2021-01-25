<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dias;

class Diascontroller extends Controller
{
   public function index()
    {
        $dia = Dias::all (); //all trae todo lo que esta cargado en la tabla, la variable que vpy a mandar//
        return view ('dias.index')->with ('dia', $dia) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dias.create');
    }


    public function store(Request $request)
    {
        $dias=new Dias();
        $dias->dia=$request->dia; 
        $dias->save();

        $dias->save();
        return redirect()->route('escuela.dias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dia=Dias::findOrfail($id);
        return view ('dias.show')->with('dias',$dia);
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
        $dias=dias::findOrfail($request->id_dia);
        $dias->dia=$request->dia;
        
        $dias->save();
        return redirect()->route('escuela.dias.show',$request->id_dia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dia=dias::findOrfail($id);
        $dia->delete();
        $dia = dias::all ();
       
        return view ('dias.index')->with ('dia', $dia) ;
    }
}
    



