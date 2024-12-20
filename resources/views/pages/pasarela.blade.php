<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - Configura tu pago</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">
    <header class="border-b border-gray-300">
        <div class="container mx-auto px-4 py-5 flex justify-between items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix" class="w-32">
            <a href="#" class="text-gray-900 font-semibold hover:underline">Cerrar sesión</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 max-w-3xl">
        <div class="text-center mb-8">
            <p class="text-sm uppercase font-bold text-gray-500 mb-2">PASO 3 DE 3</p>
            <h1 class="text-3xl font-bold mb-4">Configura tu pago</h1>
            <p class="text-xl">Tu membresía comienza tan pronto configures el pago.</p>
            <p class="font-bold">Sin compromisos. Cancela online cuando quieras.</p>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-bold mb-4">Información de pago</h2>
            <form>
                <div class="mb-4">
                    <label for="cardNumber" class="block text-sm font-medium text-gray-700 mb-1">Número de tarjeta</label>
                    <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="expDate" class="block text-sm font-medium text-gray-700 mb-1">Fecha de vencimiento</label>
                        <input type="text" id="expDate" name="expDate" placeholder="MM/AA" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>
                    <div>
                        <label for="cvv" class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                        <input type="text" id="cvv" name="cvv" placeholder="123" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre en la tarjeta</label>
                    <input type="text" id="name" name="name" placeholder="Juan Pérez" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>
            </form>
        </div>

        <div class="bg-gray-100 rounded-lg p-6 mb-8">
            <h2 class="text-xl font-bold mb-4">Resumen del plan</h2>
            <div class="flex justify-between items-center mb-2">
                <span>Plan Estándar</span>
                <span class="font-bold">12,99 €/mes</span>
            </div>
            <p class="text-sm text-gray-600">Tu próxima fecha de facturación es el 15 de mayo de 2023</p>
        </div>

        <div class="mb-8">
            <p class="text-sm text-gray-600 mb-2">Al hacer clic en el botón "Iniciar membresía", aceptas nuestros <a href="#" class="text-blue-600 hover:underline">Términos de uso</a> y nuestra <a href="#" class="text-blue-600 hover:underline">Declaración de privacidad</a>, y declaras que tienes más de 18 años.</p>
            <p class="text-sm text-gray-600">Netflix renovará automáticamente tu membresía y cobrará la cuota de membresía (actualmente 12,99 €) a tu forma de pago hasta que canceles. Puedes cancelar en cualquier momento para evitar futuros cobros.</p>
        </div>

        <div class="text-center">
            <button class="bg-red-600 text-white py-3 px-8 rounded font-bold text-lg hover:bg-red-700 transition duration-300">Iniciar membresía</button>
        </div>
    </main>

    <footer class="bg-gray-100 text-gray-500 py-8 mt-16">
        <div class="container mx-auto px-4">
            <p class="mb-4">¿Preguntas? Llama al 900 822 376</p>
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
</body>
</html>