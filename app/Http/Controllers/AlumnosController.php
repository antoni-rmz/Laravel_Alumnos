<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumnos::all();
        return view('alumnos.index-alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create-alumno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumnos();
        $alumno->nombre = $request->input('nombre');
        $alumno->correo = $request->input('correo');
        $alumno->fecha_nacimiento = $request->input('fecha_nacimiento');
        $alumno->sexo = $request->input('sexo');
        $alumno->carrera = $request->input('carrera');
        $alumno->save();

        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumnos $alumnos)
    {
        $alumnos->delete();
        return redirect()->route('alumnos.index');
    }
}
