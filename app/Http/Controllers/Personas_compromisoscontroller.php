<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Personas_compromisos;
use App\Personas;
use App\Compromisos;
use App\Roles;


class Personas_compromisoscontroller extends Controller
{
   public function index()
    {
        
$personas_compromisos=DB::table('personas_compromisos')->select('personas_compromisos.*','personas.id_persona as personas','compromisos.id_compromiso as compromisos','roles.tipo_rol as rol')->join('personas','personas.id_persona','=','personas_compromisos.id_persona')->join('compromisos','compromisos.id_compromiso','=','personas_compromisos.id_compromiso')->join('roles','roles.id_rol','=','personas_compromisos.id_rol')->get();
            //return $personas;
        return view('personas_compromisos.index')->with('personas_compromisos',$personas_compromisos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas=personas::all();
        $roles=roles::all();
        $compromisos=compromisos::all();
       
     return view ('personas_compromisos.create')->with('personas',$personas)->with ('roles',$roles)->with('compromisos',$compromisos);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $personas_compromisos=new personas_compromisos();
        $personas_compromisos->id_persona=$request->id_persona;
        $personas_compromisos->id_rol=$request->id_rol;
        $personas_compromisos->id_compromiso=$request->id_compromiso;
        $personas_compromisos->save();
        
        return redirect()->route('escuela.personas_compromisos.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $personas_compromisos=personas_compromisos::findOrfail($id);
        $personas=Personas::all();
        $roles=roles::all();
        $compromisos=Compromisos::all();
        $personas_compromisos=DB::table('personas_compromisos')->select('personas_compromisos.*','personas.id_persona as personas','compromisos.id_compromiso as compromisos','roles.tipo_rol as rol')->join('personas','personas.id_persona','=','personas_compromisos.id_persona')->join('compromisos','compromisos.id_compromiso','=','personas_compromisos.id_compromiso')->join('roles','roles.id_rol','=','personas_compromisos.id_rol')->get();

        return view('escuela.personas_compromisos.show')->with('personas_compromisos',$personas_compromisos)->with('personas',$personas)->with('roles',$roles)->with('compromisos',$compromisos);



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

        $personas_compromisos=personas_compromisos::findOrfail($request->id_persona_compromiso);
        $personas_compromisos->id_persona=$request->id_persona;
        $personas_compromisos->id_rol=$request->id_rol;
        $personas_compromisos->id_compromiso=$request->id_compromiso;
        $personas_compromisos->save();

        return redirect()->route('escuela.personas.show',$request->id_persona);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
