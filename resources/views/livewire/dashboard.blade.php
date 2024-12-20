<div class="flex flex-col h-screen bg-gray-100">
    <!-- Tabs -->
    <div class="w-full bg-gray-800 text-white">
        <nav class="flex justify-center mt-20">
            <a href="#" wire:click="changeTab('dashboard')" class="py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-t-md focus:outline-none focus:bg-gray-700">Dashboard</a>
            <a href="#" wire:click="changeTab('movies')" class="py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-t-md focus:outline-none focus:bg-gray-700">Películas</a>
            <a href="#" wire:click="changeTab('series')" class="py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-t-md focus:outline-none focus:bg-gray-700">Series</a>
            <a href="#" wire:click="changeTab('subscriptions')" class="py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-t-md focus:outline-none focus:bg-gray-700">Suscripciones</a>
            <a href="#" wire:click="changeTab('users')" class="py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-t-md focus:outline-none focus:bg-gray-700">Usuarios</a>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Dashboard de Administración</h3>

            <!-- Contenido dinámico basado en la tab activa -->
            @if($activeTab == 'dashboard')
                <x-agregar-pelicula />
            @elseif($activeTab == 'movies')
                @livewire('peliculas')
            @elseif($activeTab == 'series')
                @livewire('series')
            @elseif($activeTab == 'subscriptions')
                <div class="mt-8">
                    @livewire('suscripciones')
                </div>
            @elseif($activeTab == 'users')
                <div class="mt-8">
                    <!-- Aquí va el componente de usuarios -->
                    <x-usuarios-registrados />
                </div>
            @endif
        </div>
    </main>
</div>
