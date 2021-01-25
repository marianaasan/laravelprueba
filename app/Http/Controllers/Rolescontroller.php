<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;
use DB;
class Rolescontroller extends Controller
{
public function index()
    {
        $rol = Roles::all (); //all trae todo lo que esta cargado en la tabla//
        return view ('roles.index')->with ('roles', $rol) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('roles.create'); //carpeta paises - archivo create
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
        $roles=new Roles();
        $roles->tipo_rol=$request->tipo_rol; 
        $roles->save();
        $roles = Roles::all();
        //flash ('Se ha registrado un pais', 'info'); 
        return redirect()->route('escuela.roles.index')->with('roles', $roles);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roles=Roles::findOrfail($id);
        return view ('roles.show')->with('roles',$roles);
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
        $roles=roles::findOrfail($request->id_rol);
        $roles->tipo_rol=$request->tipo_rol;

        $roles->save();

        return redirect()->route('escuela.roles.show',$request->id_rol);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles=roles::findOrfail($id);
        $roles->delete();
        $roles = roles::all ();
       
        return view ('roles.index')->with ('roles', $roles) ;
    }
    }

