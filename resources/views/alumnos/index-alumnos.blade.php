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
                <td>Datos del alumno</td>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->codigo }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>
                    <a href="{{ route('alumnos.show', $alumno->id) }}">
                        <button type="submit">Ver detalles</button>
                    </a>
                </td>
                <td>
                    <a href="{{ route('alumnos.edit', $alumno) }}">
                        <button type="submit">Editar</button>
                    </a>
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