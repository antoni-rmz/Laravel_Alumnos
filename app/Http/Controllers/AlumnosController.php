<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use App\Http\Requests\AlumnosRequest;
use App\Http\Requests\EditarAlumnosRequest;

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
    public function store(AlumnosRequest $request)
    {
        $validatedData = $request->validated();
        Alumnos::create($validatedData);

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
    public function update(EditarAlumnosRequest $request, Alumnos $alumno)
    {
        $validatedData = $request->validated();
        $alumno->update($validatedData);
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
