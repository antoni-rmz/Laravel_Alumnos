<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link rel="stylesheet" href="{{ asset('css/index-alumnos.css') }}">
</head>
<body>
    
    <div class="container">
        <h1>Lista de Alumnos</h1>
        
        <a href="{{ route('alumnos.create') }}" class="btn btn-crear">Registrar nuevo alumno</a>
        
        @if ($alumnos->count() > 0)
            <div class="table-responsive">
                <table> <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th style="text-align: center;">Datos del alumno</th> 
                            <th style="text-align: center;">Editar</th>
                            <th style="text-align: center;">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->codigo }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            
                            <td class="accion-celda">
                                <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-mostrar">
                                    Ver detalles
                                </a>
                            </td>
                            
                            <td class="accion-celda">
                                <a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-editar">
                                    Editar
                                </a>
                            </td>
                            
                            <td class="accion-celda">
                                <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-eliminar">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="no-data">No hay alumnos registrados.</p>
        @endif
    </div> </body>
</html>