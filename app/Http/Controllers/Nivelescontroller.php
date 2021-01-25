<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveles;
use DB;

class Nivelescontroller extends Controller
{
  public function index()
    {
        
        $niveles = Niveles::all ();
        return view ('niveles.index')->with ('niveles', $niveles) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('niveles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nivel'=>'required']);
        $niveles=new Niveles();
        $niveles->nivel=$request->nivel;
        $niveles->save();

        $niveles = Niveles::all();
        return redirect()->route('escuela.niveles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $niveles=Niveles::findOrfail($id);
       return view ('niveles.show')->with('niveles',$niveles);

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
        $niveles=niveles::findOrfail($request->id_nivel);
        $niveles->nivel=$request->nivel;
        $niveles->save();
        return redirect()->route('escuela.niveles.show',$request->id_nivel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $niveles=niveles::findOrfail($id);
        $niveles->delete();
        $niveles= niveles::all ();
       
        return view ('niveles.index')->with ('niveles', $niveles) ;
    }
  }



