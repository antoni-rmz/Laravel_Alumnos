<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    <a href="{{ route('alumnos.create') }}">Registrar nuevo alumno</a>
    @if ($alumnos->count() > 0)
    <table border="1">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de Nacimiento</th>
                <th>Sexo</th>
                <th>Carrera</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->codigo }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->correo }}</td>
                <td>{{ $alumno->fecha_nacimiento }}</td>
                <td>{{ $alumno->sexo }}</td>
                <td>{{ $alumno->carrera }}</td>
                <td>
                    <form action="{{ route('alumnos.edit', $alumno->id) }}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No hay alumnos registrados.</p>
    @endif
</body>
</html>