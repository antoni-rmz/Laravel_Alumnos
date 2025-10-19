<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumnos</title>
</head>
<body>
    <h1>Editar Alumno</h1>
    <form action="/alumnos/{{ $alumno->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="codigo">Codigo: </label>
        <input type="text" id="codigo" name="codigo" value="{{ $alumno->codigo }}" require>
        <br>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" value="{{ $alumno->nombre }}" require>
        <br>
        <label for="correo">Correo: </label>
        <input type="email" id="correo" name="correo" value="{{ $alumno->correo }}" require>
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento: </label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $alumno->fecha_nacimiento }}" require>
        <br>
        <label for="sexo">Sexo: </label>
        <select name="sexo" id="sexo" require>
            <option value="">Seleccione una opción</option>
            <option value="masculino" {{ $alumno->sexo == 'masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="femenino" {{ $alumno->sexo == 'femenino' ? 'selected' : '' }}>Femenino</option>
            <option value="prefiero_no_decirlo" {{ $alumno->sexo == 'prefiero_no_decirlo' ? 'selected' : '' }}>Prefiero no decirlo</option>
        </select>
        <br>
        <label for="carrera">Carrera: </label>
        <input type="text" id="carrera" name="carrera" value="{{ $alumno->carrera }}" require>
        <br>
        <button type="submit">Actualizar Alumno.</button>
    </form>
</body>
</html>