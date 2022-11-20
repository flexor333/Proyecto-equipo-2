<?php
namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create')->with('admins',Admin::all());
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
        $admins = new Admin();

       $admins->email=$request->email;
       $admins->nombres=$request->nombres;
       $admins->apellidos=$request->apellidos;
       $admins->telefono=$request->telefono;
       $admins->genero=$request->genero;
       $admins->fecha_n=$request->fecha_n;
       $admins->direccion=$request->direccion;


       if($request->hasFile("foto")){

        $foto = $request->file("foto");
        $admins->foto =  time()."_".$foto->getClientOriginalName();
        $ruta = public_path("img/admin/");
        //$foto->move($ruta);
        copy($foto->getRealPath(),$ruta.$admins->foto);}

        $admins->save();

       return view('admin.create')
       ->with('admins', Admin::all())
       ->with('mensaje',"Admin Registrado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admins = Admin::find($id);
        return view('new.show')->with('admins',$admins);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admin::find($id);
        return view('new.show')->with('admins',$admins);
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
        $admins = Admin::find($id);

       $admins->email=$request->email;
       $admins->nombres=$request->nombres;
       $admins->apellidos=$request->apellidos;
       $admins->telefono=$request->telefono;
       $admins->genero=$request->genero;
       $admins->fecha_n=$request->fecha_n;
       $admins->direccion=$request->direccion;

   
        $input = $request->all();

  
        if($request->hasFile("foto")){

            $foto = $request->file("foto");
            $admins->foto =  time()."_".$foto->getClientOriginalName();
            $ruta = public_path("img/admin/");
            //$foto->move($ruta);
            copy($foto->getRealPath(),$ruta.$admins->foto);
            
            
        }else{
            unset($input['foto']);
        }
 
        $admins->save();
 
        return redirect()->route('noticia')
        ->with('admins',Admin::all())
        ->with('mensaje',"Admin Actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Admin::find($id);
 
        $admins->delete();
 
        return redirect()->route('noticia')
        ->with('admins',Admin::all())
        ->with('mensaje',"Admin Borrada");
    }
}
