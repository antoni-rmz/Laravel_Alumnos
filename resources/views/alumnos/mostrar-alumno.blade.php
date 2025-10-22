<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de {{ $alumno->nombre }}</title>
</head>
<body>
    <h1>Detalles del Alumno</h1>

    <p><strong>Código: </strong> {{ $alumno->codigo }}</p>
    <p><strong>Nombre: </strong> {{ $alumno->nombre }}</p>
    <p><strong>Correo: </strong> {{ $alumno->correo }}</p>
    <p><strong>Fecha de Nacimiento: </strong> {{ $alumno->fecha_nacimiento }}</p>
    <p><strong>Sexo: </strong> {{ $alumno->sexo }}</p>
    <p><strong>Carrera: </strong> {{ $alumno->carrera }}</p>
    <a href="{{ route('alumnos.edit', $alumno) }}">
        <button type="submit">Editar Alumno</button>
    <br>
</body>
</html>