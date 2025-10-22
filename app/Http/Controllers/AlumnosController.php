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
        $alumno->codigo = $request->input('codigo');
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
    public function show(Alumnos $alumno)
    {
        return view('alumnos.mostrar-alumno', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumnos $alumno)
    {
        //Funcion para editar un alumno
        $alumno = Alumnos::findOrfail($alumno->id);
        return view('alumnos.editar-alumno', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumnos $alumno)
    {
        //Funcion para actualizar un alumno
        $alumno->codigo = $request->input('codigo');
        $alumno->nombre = $request->input('nombre');
        $alumno->correo = $request->input('correo');
        $alumno->fecha_nacimiento = $request->input('fecha_nacimiento');
        $alumno->sexo = $request->input('sexo');
        $alumno->carrera = $request->input('carrera');
        $alumno->save();
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumnos $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
