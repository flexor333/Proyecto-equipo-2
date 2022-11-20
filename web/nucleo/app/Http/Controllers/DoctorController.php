<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor.create')->with('doctors',Doctor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctors = new Doctor();

       $doctors->email=$request->email;
       $doctors->nombres=$request->nombres;
       $doctors->apellidos=$request->apellidos;
       $doctors->telefono=$request->telefono;
       $doctors->genero=$request->genero;
       $doctors->fecha_n=$request->fecha_n;
       $doctors->direccion=$request->direccion;
       $doctors->especialidad=$request->especialidad;
       $doctors->cedula=$request->cedula;


       if($request->hasFile("foto")){

        $foto = $request->file("foto");
        $doctors->foto =  time()."_".$foto->getClientOriginalName();
        $ruta = public_path("img/doctor/");
        //$foto->move($ruta);
        copy($foto->getRealPath(),$ruta.$doctors->foto);}

        $doctors->save();

       return view('doctor.create')
       ->with('doctors',Doctor::all())
       ->with('mensaje',"Doctor Registrado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctors = Doctor::find($id);
        return view('new.show')->with('doctors',$doctors);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = Doctor::find($id);
        return view('new.edit')->with('doctors',$doctors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctors = Doctor::find($id);

        $doctors->email=$request->email;
        $doctors->nombres=$request->nombres;
        $doctors->apellidos=$request->apellidos;
        $doctors->telefono=$request->telefono;
        $doctors->genero=$request->genero;
        $doctors->fecha_n=$request->fecha_n;
        $doctors->direccion=$request->direccion;
 
    
         $input = $request->all();
 
   
         if($request->hasFile("foto")){
 
             $foto = $request->file("foto");
             $doctors->foto =  time()."_".$foto->getClientOriginalName();
             $ruta = public_path("img/doctor/");
             //$foto->move($ruta);
             copy($foto->getRealPath(),$ruta.$doctors->foto);
             
             
         }else{
             unset($input['foto']);
         }
  
         $doctors->save();
  
         return redirect()->route('noticia')
         ->with('doctors',Doctor::all())
         ->with('mensaje',"Doctor Actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctors = Doctor::find($id);
 
        $doctors->delete();
 
        return redirect()->route('noticia')
        ->with('doctors',Doctor::all())
        ->with('mensaje',"Doctor Borrada");
    }
}
