<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistemas de alumnos')</title>
    @stack('styles')
</head>
<body>
        <header>
            <h1>Sistema de Gestión de Alumnos</h1>
        </header>
    <main>
    @yield('content')
    </main>

    <footer>
        <center><p>© 2025 Aplicación de Gestión de Alumnos</p></center>
    </footer>
</body>
</html>