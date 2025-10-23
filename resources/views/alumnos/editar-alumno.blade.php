@extends('layouts.vistas-web')

@section('title', 'Editar Alumno')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/editar-alumno.css') }}">
@endpush

@section('content')
    <div class="container">
        <h1>Editar Alumno</h1>
        
        <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="codigo" class="form-label">Codigo: </label>
                <input type="number" id="codigo" name="codigo" value="{{ old('codigo', $alumno->codigo) }}" class="form-control @error('codigo') is-invalid @enderror">
                @error('codigo')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $alumno->nombre) }}" class="form-control @error('nombre') is-invalid @enderror">
                @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="correo" class="form-label">Correo: </label>
                <input type="email" id="correo" name="correo" value="{{ old('correo', $alumno->correo) }}" class="form-control @error('correo') is-invalid @enderror">
                @error('correo')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento: </label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $alumno->fecha_nacimiento) }}" class="form-control @error('fecha_nacimiento') is-invalid @enderror">
                @error('fecha_nacimiento')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="sexo" class="form-label">Sexo: </label>
                <select name="sexo" id="sexo" class="form-control @error('sexo') is-invalid @enderror">
                    <option value="">Seleccione una opción</option>
                    <option value="masculino" {{ old('sexo', $alumno->sexo) == 'masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="femenino" {{ old('sexo', $alumno->sexo) == 'femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="prefiero_no_decirlo" {{ old('sexo', $alumno->sexo) == 'prefiero_no_decirlo' ? 'selected' : '' }}>Prefiero no decirlo</option>
                </select>
                @error('sexo')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="carrera" class="form-label">Carrera: </label>
                <input type="text" id="carrera" name="carrera" value="{{ old('carrera', $alumno->carrera) }}" class="form-control @error('carrera') is-invalid @enderror">
                @error('carrera')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-actions">
                <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-actualizar">Actualizar Alumno</button>
            </div>
            
        </form>
    </div>
@endsection