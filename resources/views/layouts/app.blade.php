<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leonardo Leiva | Portfolio</title>

    @vite([
        'resources/css/app.css',  // aqui cargaran los estilos y las animaciones del css(bootstrap) y js 
        'resources/js/app.js'
    ])
</head>

<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>
