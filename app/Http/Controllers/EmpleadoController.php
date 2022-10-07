<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Puesto;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::with('puesto')->latest()->paginate();
        return view('empleados.index',compact("empleados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puestos = Puesto::all();
        return view("empleados.create",compact("puestos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = Empleado::create([
            'created_at' => now(),
            'updated_at' => now(),
            'isActive' =>true
        ]+ $request->all());

        return view('empleados.show',compact('empleado'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        /* $empleado = Empleado::findorFail($id);*/
        $puestos = Puesto::all(); 
        /* return view('empleados.edit',compact('empleado','puestos')); */
        return view('empleados.edit',compact('empleado','puestos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Empleado $empleado)
    {
        
        /* $empleado = Empleado::findorFail($id);
        $empleado->nombre = $request->input('nombre');
        $empleado->edad = $request->input('edad');
        $empleado->correo = $request->input('correo');
        $empleado->puesto = $request->input('id_puesto');
        $empleado->save(); */
        $empleado->update($request->all());
        $empleado->save();

        return view('empleados.show',compact('empleado'));

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* dd($id); */
        $empleado = Empleado::find($id);
        $empleado->delete();
        $empleados = Empleado::with('puesto')->latest()->paginate();
        return view('empleados.index',compact('empleados'));
    }
}
