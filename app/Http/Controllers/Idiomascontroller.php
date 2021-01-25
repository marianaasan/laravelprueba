<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idiomas;

class Idiomascontroller extends Controller
{
   public function index()
    {
        $idiomas = Idiomas::all (); //all trae todo lo que esta cargado en la tabla, la variable que vpy a mandar//
        return view ('idiomas.index')->with ('idiomas', $idiomas) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('idiomas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idiomas=new Idiomas();
        $idiomas->idioma=$request->idioma;
        $idiomas->save();
        return redirect()->route('escuela.idiomas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idiomas=Idiomas::findOrfail($id);
        return view ('idiomas.show')->with('idiomas',$idiomas);
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
        $idiomas=idiomas::findOrfail($request->id_idioma);
        $idiomas->idioma=$request->idioma;
        $idiomas->save();
        return redirect()->route('escuela.idiomas.show',$request->id_idioma);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idiomas=idiomas::findOrfail($id);
        $idiomas->delete();
        $idiomas = idiomas::all ();
       
        return view ('idiomas.index')->with ('idiomas', $idiomas) ;
    }
    }



