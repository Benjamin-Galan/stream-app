<div class="flex space-x-2 pb-4">
    @foreach($series as $serie)
        <div class="relative w-72">
            <div class="rounded-lg overflow-hidden shadow-lg hover:scale-105 cursor-pointer transition-transform duration-300">
                <img src="{{ $serie->imagen_url }}" alt="{{ $serie->titulo }}" class="w-full h-40 object-cover">
            </div>
        </div>
    @endforeach
</div>
