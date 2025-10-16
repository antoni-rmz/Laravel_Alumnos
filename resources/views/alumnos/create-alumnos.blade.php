<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno: Registrar</title>
</head>
<body>
    <h1>Registro de nuevo alumno</h1>
    <form action="/alumnos" method="POST">
        @csrf
        <label for="codigo">Codigo: </label>
        <input type="text" id="codigo" name="codigo" require>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" require>
        <label for="correo">Correo: </label>
        <input type="email" id="correo" name="correo" require>
        <label for="fecha_nacimiento">Fecha de Nacimiento: </label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" require>
        <label for="sexo">Sexo: </label>
        <select name="sexo" id="sexo" require>
            <option value="">Seleccione una opción</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="prefiero_no_decirlo">Prefiero no decirlo</option>
        </select>
        <label for="carrera">Carrera: </label>
        <input type="text" id="carrera" name="carrera" require>
        <button type="submit">Agregar Alumno.</button>
    </form>
</body>
</html>