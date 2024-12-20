<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NicaFlix</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>

    
    <body class="bg-zinc-900 text-white">
        <header class="fixed top-0 z-50 w-full bg-gradient-to-b from-black to-transparent">
            <x-navegacion-principal />
        </header>
    
        <main>
            @yield('contenido')
        </main>
    </body>

    <footer class="bg-black bg-opacity-70 text-gray-400 py-8 mt-20">
        <div class="container mx-auto px-4">
            <p class="mb-4">¿Preguntas? Llama al 1-800-XXX-XXXX</p>
            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-sm">
                <li><a href="#" class="hover:underline">Preguntas frecuentes</a></li>
                <li><a href="#" class="hover:underline">Centro de ayuda</a></li>
                <li><a href="#" class="hover:underline">Términos de uso</a></li>
                <li><a href="#" class="hover:underline">Privacidad</a></li>
                <li><a href="#" class="hover:underline">Preferencias de cookies</a></li>
                <li><a href="#" class="hover:underline">Información corporativa</a></li>
            </ul>
        </div>
    </footer>
</html>

