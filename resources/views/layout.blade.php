<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitio web básico @yield('title')</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
            <li><a href="{{ route('productos') }}">Productos</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
        </ul>    
    </nav>
    
    @yield('content')

    <footer>
        Mujeres en las TIC 2020
    </footer>

</body>
</html>