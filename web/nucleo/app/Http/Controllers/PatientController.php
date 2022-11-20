<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.create')->with('patients', Patient::all());
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
        $patients = new Patient();

        $patients->email = $request->email;
        $patients->nombres = $request->nombres;
        $patients->apellidos = $request->apellidos;
        $patients->telefono = $request->telefono;
        $patients->genero = $request->genero;
        $patients->fecha_n = $request->fecha_n;
        $patients->direccion = $request->direccion;


        if ($request->hasFile("foto")) {

            $foto = $request->file("foto");
            $patients->foto =  time() . "_" . $foto->getClientOriginalName();
            $ruta = public_path("img/patient/");
            //$foto->move($ruta);
            copy($foto->getRealPath(), $ruta . $patients->foto);
        }

        $patients->save();

        if(Auth::user()->rol == 'Admin' )

        return view('dashboard')
            ->with('patients', Patient::all())
            ->with('mensaje', "Paciente Registrado");
     else{

                return view('dashboard');

    }

            ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patients = Patient::find($id);
        return view('new.show')->with('patients', $patients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patients = Patient::find($id);
        return view('new.edit')->with('patients', $patients);
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
        $patients = Patient::find($id);

        $patients->email = $request->email;
        $patients->nombres = $request->nombres;
        $patients->apellidos = $request->apellidos;
        $patients->telefono = $request->telefono;
        $patients->genero = $request->genero;
        $patients->fecha_n = $request->fecha_n;
        $patients->direccion = $request->direccion;


        $input = $request->all();


        if ($request->hasFile("foto")) {

            $foto = $request->file("foto");
            $patients->foto =  time() . "_" . $foto->getClientOriginalName();
            $ruta = public_path("img/patient/");
            //$foto->move($ruta);
            copy($foto->getRealPath(), $ruta . $patients->foto);
        } else {
            unset($input['foto']);
        }

        $patients->save();

        return redirect()->route('noticia')
            ->with('patients', Patient::all())
            ->with('mensaje', "Paciente Actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patient::find($id);

        $patients->delete();

        return redirect()->route('noticia')
            ->with('patients', Patient::all())
            ->with('mensaje', "Paciente Borrada");
    }
}
