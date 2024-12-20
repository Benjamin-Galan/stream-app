<div class="flex flex-col items-center space-y-4">

    <h2 class="text-2xl font-semibold mb-4">Películas en Netflix</h2>

    <div class="relative flex items-center">
        <!-- Contenedor de las imágenes (películas) -->
        <div class="flex overflow-hidden" style="width: 320px;">
            <div class="flex transition-transform duration-300" style="transform: translateX(-{{ $scrollIndex * 320 }}px);">
                @foreach($peliculas as $pelicula)
                    <div class="flex-none w-80 mr-4">
                        <img src="{{ $pelicula->imagen_url }}" alt="{{ $pelicula->titulo }}" class="w-full h-48 object-cover rounded-md shadow-md">
                        <p class="mt-2 text-center text-lg font-medium">{{ $pelicula->titulo }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Botón para ir a la siguiente imagen -->
        @if ($scrollIndex < count($peliculas) - 3) <!-- Se muestra el botón si hay más imágenes -->
            <button wire:click="deslizarSiguiente" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                Siguiente
            </button>
        @endif

        <!-- Botón para ir a la imagen anterior -->
        @if ($scrollIndex > 0) <!-- Se muestra el botón si no estamos en el principio -->
            <button wire:click="deslizarAnterior" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                Anterior
            </button>
        @endif
    </div>
</div>
