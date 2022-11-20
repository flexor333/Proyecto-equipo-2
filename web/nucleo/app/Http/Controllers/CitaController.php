<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Patient;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cita.index')
        ->with('cita',Cita::all())
        ->with('horario',Horario::all())
        ->with('doctor',Doctor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cita.create')
        ->with('horario',Horario::all())
        ->with('doctor',Doctor::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new Cita();

        $cita->doctors_id=$request->doctors_id;
        $cita->patients_email=$request->patients_email;
        $cita->fecha=$request->fecha;
        $cita->horarios_id=$request->horarios_id;
        $cita->def_cita=$request->def_cita;
        $cita->descripcion=$request->descripcion;
 
         $cita->save();
 
        return view('cita.index')
        ->with('cita',Cita::all())
        ->with('horario',Horario::all())
        ->with('doctor',Doctor::all())
        ->with('mensaje',"Cita Registrado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::find($id);
        return view('cita.show')->with('cita',$cita)
        ->with('horario',Horario::all())
        ->with('doctor',Doctor::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::find($id);
        return view('cita.edit')->with('cita',$cita)
        ->with('horario',Horario::all())
        ->with('doctor',Doctor::all());
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
        $cita = new Cita();

        $cita->doctors_id=$request->doctors_id;
        $cita->patients_email=$request->patients_email;
        $cita->fecha=$request->fecha;
        $cita->horarios_id=$request->horarios_id;
        $cita->def_cita=$request->def_cita;
        $cita->descripcion=$request->descripcion;
 
         $cita->save();
 
        return view('cita.index')
        ->with('cita',Cita::all())
        ->with('horario',Horario::all())
        ->with('doctor',Doctor::all())
        ->with('mensaje',"Cita Actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Cita::find($id);
 
        $cita->delete();

        return view('cita.index')
        ->with('cita',Cita::all())
        ->with('horario',Horario::all())
        ->with('doctor',Doctor::all())
        ->with('mensaje',"Cita Borrada");
    }
}
