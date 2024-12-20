<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - Elige tu plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">
    <header class="border-b border-gray-300">
        <div class="container mx-auto px-4 py-5 flex justify-between items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix" class="w-32">
            <a href="#" class="text-gray-900 font-semibold hover:underline">Cerrar sesión</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="text-center mb-8">
            <p class="text-sm uppercase font-bold text-gray-500 mb-2">PASO 2 DE 3</p>
            <h1 class="text-3xl font-bold mb-4">Selecciona el plan ideal para ti</h1>
            <ul class="text-lg">
                <li class="flex items-center justify-center mb-2">
                    <svg class="w-6 h-6 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Ve todo lo que quieras. Sin anuncios.
                </li>
                <li class="flex items-center justify-center mb-2">
                    <svg class="w-6 h-6 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Recomendaciones exclusivas para ti.
                </li>
                <li class="flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Puedes cambiar de plan o cancelar cuando quieras.
                </li>
            </ul>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="border rounded p-4 text-center hover:shadow-lg transition duration-300">
                <h2 class="font-bold mb-2">Básico</h2>
                <p class="text-2xl font-bold mb-4">7,99 €</p>
                <ul class="text-sm">
                    <li class="mb-2">Buena calidad de video</li>
                    <li class="mb-2">Resolución 720p</li>
                    <li>Ve en 1 dispositivo a la vez</li>
                </ul>
            </div>
            <div class="border rounded p-4 text-center hover:shadow-lg transition duration-300 bg-red-50">
                <h2 class="font-bold mb-2">Estándar</h2>
                <p class="text-2xl font-bold mb-4">12,99 €</p>
                <ul class="text-sm">
                    <li class="mb-2">Mejor calidad de video</li>
                    <li class="mb-2">Resolución 1080p</li>
                    <li>Ve en 2 dispositivos a la vez</li>
                </ul>
            </div>
            <div class="border rounded p-4 text-center hover:shadow-lg transition duration-300">
                <h2 class="font-bold mb-2">Premium</h2>
                <p class="text-2xl font-bold mb-4">17,99 €</p>
                <ul class="text-sm">
                    <li class="mb-2">La mejor calidad de video</li>
                    <li class="mb-2">Resolución 4K+HDR</li>
                    <li>Ve en 4 dispositivos a la vez</li>
                </ul>
            </div>
        </div>

        <p class="text-sm text-gray-500 mb-4">La disponibilidad del contenido en HD (720p), Full HD (1080p), Ultra HD (4K) y HDR depende de tu servicio de internet y del dispositivo en uso. No todo el contenido está disponible en todas las resoluciones. Consulta nuestros Términos de uso para obtener más información.</p>
        
        <p class="text-sm text-gray-500 mb-8">Solo las personas que viven contigo pueden usar tu cuenta. Ve Netflix en 4 dispositivos diferentes al mismo tiempo con el plan Premium, en 2 con el plan Estándar y en 1 con el plan Básico.</p>

        <div class="text-center">
            <button class="bg-red-600 text-white py-3 px-8 rounded font-bold text-lg hover:bg-red-700 transition duration-300">Siguiente</button>
        </div>
    </main>

    <footer class="bg-gray-100 text-gray-500 py-8 mt-16">
        <div class="container mx-auto px-4">
            <p class="mb-4">¿Preguntas? Llama al 900 822 376</p>
            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-sm">
                <li><a href="#" class="hover:underline">Preguntas frecuentes</a></li>
                <li><a href="#" class="hover:underline">Centro de ayuda</a></li>
                <li><a href="#" class="hover:underline">Cuenta</a></li>
                <li><a href="#" class="hover:underline">Prensa</a></li>
                <li><a href="#" class="hover:underline">Relaciones con inversionistas</a></li>
                <li><a href="#" class="hover:underline">Empleo</a></li>
                <li><a href="#" class="hover:underline">Formas de ver</a></li>
                <li><a href="#" class="hover:underline">Términos de uso</a></li>
                <li><a href="#" class="hover:underline">Privacidad</a></li>
                <li><a href="#" class="hover:underline">Preferencias de cookies</a></li>
                <li><a href="#" class="hover:underline">Información corporativa</a></li>
                <li><a href="#" class="hover:underline">Contáctanos</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>