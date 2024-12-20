<!-- Movies and Series List -->
<div class="mt-8">
    <!-- Botón para mostrar el formulario -->
    <button wire:click="toggleForm" class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
        Agregar Nueva Serie
    </button>

    <!-- Formulario para agregar/editar serie -->
    @if($isFormVisible)
        <form wire:submit.prevent="saveSerie" class="mt-6 space-y-4">
            <div class="flex flex-col">
                <label for="titulo" class="text-gray-700 font-medium">Título</label>
                <input type="text" wire:model="titulo" id="titulo" class="mt-2 text-gray-700 p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="flex flex-col">
                <label for="descripcion" class="text-gray-700 font-medium">Descripción</label>
                <textarea wire:model="descripcion" id="descripcion" class="mt-2 text-gray-700 p-2 border border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="flex flex-col">
                <label for="imagen_url" class="text-gray-700 font-medium">URL de la Imagen</label>
                <input type="text" wire:model="imagen_url" id="imagen_url" class="mt-2 text-gray-700 p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="flex flex-col">
                <label for="categoria" class="text-gray-700 font-medium">Categoría</label>
                <select wire:model="categoria_id" id="categoria" class="mt-2 text-gray-700 p-2 border border-gray-300 rounded-md" required>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="px-6 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    @if($serie_id) Actualizar Serie @else Guardar Serie @endif
                </button>
            </div>
        </form>
    @endif
    
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-medium">Lista de Series</h2>
            <div class="overflow-x-auto mt-6">
                <table class="w-full whitespace-nowrap">
                    <thead>
                        <tr class="text-left font-bold">
                            <th class="px-6 py-3 bg-gray-500">Título</th>
                            <th class="px-6 py-3 bg-gray-500">Imagen</th>
                            <th class="px-6 py-3 bg-gray-500">Descripción</th>
                            <th class="px-6 py-3 bg-gray-500">Género</th>
                            <th class="px-6 py-3 bg-gray-500">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($series as $serie)
                        <tr>
                            <td class="px-6 py-4 text-gray-900">{{$serie->titulo}}</td>
                            <td class="px-6 py-4 text-gray-900"><img src="{{$serie->imagen_url}}" class="w-10" alt=""></td>
                            <td class="px-6 py-4 text-gray-900">{{$serie->descripcion}}</td>
                            <td class="px-6 py-4 text-gray-900">{{$serie->categoria->nombre}}</td>
                            <td class="px-6 py-4 text-gray-900">
                                <button wire:click="editSerie({{ $serie->id }})"
                                    class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 mr-2">Editar</button>
                                <button wire:click="deleteSerie({{ $serie->id }})"
                                    class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Eliminar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
