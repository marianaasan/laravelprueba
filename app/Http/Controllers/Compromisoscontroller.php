<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Compromisos;
use App\Tipos_compromisos;
use App\Personas;
use App\Roles;
use App\Personas_compromisos;
use Carbon\Carbon;


class Compromisoscontroller extends Controller
{
 public function index(Request $request)
    {
      
        $compromisos=DB::table('compromisos')->select('compromisos.*','tipos_compromisos.descripcion as tipos_compromisos')->join('tipos_compromisos','tipos_compromisos.id_tipo_compromiso','=','compromisos.id_tipo_compromiso')->join('personas_compromisos','compromisos.id_compromiso','=','personas_compromisos.id_compromiso')->get(); 

        return view('compromisos.index')->with('compromisos',$compromisos) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       $tipos_compromisos=tipos_compromisos::all();
       $compromisos=DB::table('compromisos'); 
       $personas = DB::table('personas')->select('personas.apellidos','personas.nombres','personas.documento','personas.id_persona')->get();
       $roles = DB::table('roles')->select('roles.tipo_rol','roles.id_rol')->get();
       //$personas=DB::table('personas')->select(DB::raw('CONCAT (personas.nombres, " ",personas.apellidos, " ", personas.cuit) as datos_personales'),'personas.id_persona')->get();
        
         return view ('compromisos.create')->with ('tipos_compromisos',$tipos_compromisos)->with ('personas',$personas)->with ('roles',$roles); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd(gettype($request->id_rol));
        //return $request->all();
         //dd($request);



        $compromisos=new compromisos();

        $compromisos->id_tipo_compromiso=$request->id_tipo_compromiso;
        $compromisos->monto_total=$request->monto_total;
        $compromisos->fecha_inicio=$request->fecha_inicio;
        $compromisos->fecha_fin=$request->fecha_fin;
        $compromisos->disposicion=$request->disposicion;
        $compromisos->nro_contrato=$request->nro_contrato;
        $compromisos->fecha_baja=$request->fecha_baja;
        $compromisos->estado=$request->estado;
        $compromisos->save();

       //dd($request->id_roles);


        foreach ($request->id_personas as $i => $id_persona) {
            
            $personas_compromisos=new personas_compromisos();
            $personas_compromisos->monto_mensual=$request->montos_mensuales[$i];
            $personas_compromisos->id_persona=$id_persona;
            $personas_compromisos->id_rol=$request->id_roles[$i];
            $personas_compromisos->id_compromiso=$compromisos->id_compromiso;
            $personas_compromisos->save();
        }

      
      //  $personas_compromisos->compromisos()->associate($compromisos->id_compromiso);

       // dd(gettype($request->monto_mensual));
        

        return redirect()->route('escuela.compromisos.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $compromisos=compromisos::findOrfail($id);
    $tipos_compromisos=tipos_compromisos::all();
      
        $compromisos=DB::table('compromisos')->select('tipos_compromisos.descripcion as tipos_compromisos','tipos_compromisos.id_tipo_compromiso')->join('tipos_compromisos','tipos_compromisos.id_tipo_compromiso','=','compromisos.id_tipo_compromiso')->where('compromisos.id_compromiso','=',$id)->get(); 
         return view('compromisos.show')->with('compromisos',$compromisos)->with('tipos_compromisos',$tipos_compromisos);
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
        
        $compromisos=compromisos::findOrfail($request->id_compromiso);

        $compromisos->id_tipo_compromiso=$request->id_tipo_compromiso;
        $compromisoss->monto_total=$request->monto_total;
        $compromisos->fecha_inicio=$request->fecha_inicio;
        $compromisos->fecha_fin=$request->fecha_fin;
        $compromisos->disposicion=$request->disposicion;
        $compromisos->nro_contrato=$request->nro_contrato;
        $compromisos->fecha_baja=$request->fecha_baja;
        $compromisos->estado=$request->estado;

        $personas_compromisos->save();
        return redirect()->route('escuela.compromisos.show', $request->id_compromiso);

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


//public function personas_compromisos(ProductoRequest $request){

        //creo el producto
        //| = personas_compromisos::updateOrCreate(['nombre'=>$request->nombre],$request->all());

        //creo los tipos materiales productos (request->cantidades y request->tipos_materiales son los arrays que vienen de la vista)
      //  foreach($request->cantidades as $i => $cant){
         //  personas_compromisos::create([
        //        'id_persona'=> $cant,
                //'id_rol'  => $request->tipos_materiales[$i],
                //'monto_mensual'=> $producto->id,
           // ]);
       // }

      //  return redirect()->route('productos.cargar-tareas',$producto);
    