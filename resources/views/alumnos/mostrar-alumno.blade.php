@extends('layouts.vistas-web')

@section('title', 'Detalles de '. $alumno->nombre)

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mostrar-alumno.css') }}">
@endpush

@section('content')
    <div class="container">
        <h1>Detalles del Alumno</h1>

        <div class="details-list">
            <div class="detail-item">
                <strong class="detail-label">Código:</strong>
                <span class="detail-data">{{ $alumno->codigo }}</span>
            </div>
            
            <div class="detail-item">
                <strong class="detail-label">Nombre:</strong>
                <span class="detail-data">{{ $alumno->nombre }}</span>
            </div>
            
            <div class="detail-item">
                <strong class="detail-label">Correo:</strong>
                <span class="detail-data">{{ $alumno->correo }}</span>
            </div>
            
            <div class="detail-item">
                <strong class="detail-label">Fecha de Nacimiento:</strong>
                <span class="detail-data">{{ $alumno->fecha_nacimiento }}</span>
            </div>
            
            <div class="detail-item">
                <strong class="detail-label">Sexo:</strong>
                <span class="detail-data">{{ $alumno->sexo }}</span>
            </div>
            
            <div class="detail-item">
                <strong class="detail-label">Carrera:</strong>
                <span class="detail-data">{{ $alumno->carrera }}</span>
            </div>
        </div>

        <div class="actions">
            <a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-editar">
                Editar Alumno
            </a>
            <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">
                Regresar a la Lista
            </a>
        </div>
    </div>
@endsection