<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno: Registrar</title>
</head>
<body>
    <h1>Registro de nuevo alumno</h1>
        <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div>
            <label for="codigo">Codigo: </label>
            <input type="number" id="codigo" name="codigo" value="{{ old('codigo') }}" class="@error('codigo') is-invalid @enderror">
            @error('codigo')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"  class="@error('nombre') is-invalid @enderror">
            @error('nombre')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="correo">Correo: </label>
            <input type="email" id="correo" name="correo" value="{{ old('correo') }}" class="@error('correo') is-invalid @enderror">
            @error('correo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento: </label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"  value="{{ old('fecha_nacimiento') }}" class="@error('fecha_nacimiento') is-invalid @enderror">
            @error('fecha_nacimiento')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="sexo">Sexo: </label>
            <select name="sexo" id="sexo" class="@error('sexo') is-invalid @enderror">
                <option value="">Seleccione una opción</option>
                {{-- Lógica para 'old()' en un select --}}
                <option value="masculino" {{ old('sexo') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="femenino" {{ old('sexo') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="prefiero_no_decirlo" {{ old('sexo') == 'prefiero_no_decirlo' ? 'selected' : '' }}>Prefiero no decirlo</option>
            </select>
            @error('sexo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="carrera">Carrera: </label>
            <input type="text" id="carrera" name="carrera" value="{{ old('carrera') }}" class="@error('carrera') is-invalid @enderror">
            @error('carrera')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Agregar Alumno</button>
    </form>
</body>
</html>