@extends('layouts.app')

@section('contenido')
<section class="relative h-[56.25vw] min-h-[400px] max-h-[80vh]">
    <video autoplay loop class="w-full h-full object-cover">
        <source src="https://video-lax3-1.xx.fbcdn.net/o1/v/t2/f2/m69/AQMUQ7N03caLIwue-LLwWA-BpsMaAgsb7QzvxdpxpBbz3z2juhER59NQao4pBfTyYov38hfIMTJosOpNMl6juWbR.mp4?efg=eyJ4cHZfYXNzZXRfaWQiOjg1NjYzODUzMjkwNDQ4NywidmVuY29kZV90YWciOiJ4cHZfcHJvZ3Jlc3NpdmUuRkFDRUJPT0suLkMzLjEyODAuZGFzaF9oMjY0LWJhc2ljLWdlbjJfNzIwcCJ9&_nc_ht=video-lax3-1.xx.fbcdn.net&_nc_cat=109&strext=1&vs=11a3d1caf46b212c&_nc_vs=HBksFQIYOnBhc3N0aHJvdWdoX2V2ZXJzdG9yZS9HTGRYcXh1RE0wN0JVU2dHQU1lMUlhSHZCSnBOYm1kakFBQUYVAALIAQAVAhg6cGFzc3Rocm91Z2hfZXZlcnN0b3JlL0dEamFSQkFUcmhwTkUxb0dBTEZtRFZKNXRiMDVidjRHQUFBRhUCAsgBACgAGAAbAogHdXNlX29pbAExEnByb2dyZXNzaXZlX3JlY2lwZQExFQAAJs6Yo7f2xoUDFQIoAkMzLBdAbkVP3ztkWhgZZGFzaF9oMjY0LWJhc2ljLWdlbjJfNzIwcBEAdQIA&ccb=9-4&oh=00_AYAqATSKWc2IVVkubSd1kmyhZaM0wWoKKaKvaW1K6vJ_1g&oe=676774FC&_nc_sid=1d576d" type="video/mp4">
    </video>

    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-zinc-900 to-transparent p-8 pt-40">
        <h1 class="mb-4 text-5xl font-bold">Demon Slayer: Kimetsu No Yaiba</h1>
        <p class="mb-4 max-w-xl text-lg">Tras la tragedia de ver a su familia masacrada por demonios, Tanjiro Kamado se embarca en un peligroso viaje para vengar a los suyos y salvar a su hermana Nezuko, quien ha sido convertida en demonio.</p>
        <div class="flex space-x-4">
            <button class="flex items-center space-x-2 bg-white text-black px-4 py-2 rounded hover:bg-opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                </svg>
                <span>Reproducir</span>
            </button>
            <button class="flex items-center space-x-2 bg-gray-500 bg-opacity-50 text-white px-4 py-2 rounded hover:bg-opacity-70">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                <span>Más información</span>
            </button>
        </div>
    </div>
</section>

<section class="mt-8 space-y-8">
    <div class="px-4">
        <h2 class="mb-4 flex items-center text-xl font-semibold">
            Peliculas en Netflix
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </h2>

        <div class="flex space-x-2 overflow-x-auto pb-4">
            @livewire('mostrar-card-pelicula')
        </div>
        
    </div>

    <div class="px-4">
        <h2 class="mb-4 flex items-center text-xl font-semibold">
            Series Originales
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </h2>
        <div class="flex space-x-2 overflow-x-auto pb-4">
            @livewire('mostrar-card-series')
        </div>
    </div>
</section>

<script>
    // Esperamos a que el video cargue...
    document.addEventListener("DOMContentLoaded", function () {
        const videoElement = document.getElementById("videoElement");

        // En este caso, después de un clic en la página, habilitamos el sonido
        videoElement.addEventListener("click", function() {
            // Quitamos el muted para permitir el sonido
            videoElement.muted = false;
        });
    });
</script>
@endsection