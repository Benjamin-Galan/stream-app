<!-- Add New Movie/Series Form -->
<div class="mt-8">
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-medium">Agregar Nueva Película/Serie</h2>
            <form>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="title">Título</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text"
                            id="title">
                    </div>
                    <div>
                        <label class="text-gray-700" for="type">Tipo</label>
                        <select class="form-select w-full mt-2 rounded-md focus:border-indigo-600"
                            id="type">
                            <option>Película</option>
                            <option>Serie</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-gray-700" for="genre">Género</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text"
                            id="genre">
                    </div>
                    <div>
                        <label class="text-gray-700" for="release_date">Fecha de Lanzamiento</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="date"
                            id="release_date">
                    </div>
                    <div class="sm:col-span-2">
                        <label class="text-gray-700" for="description">Descripción</label>
                        <textarea class="form-textarea w-full mt-2 rounded-md focus:border-indigo-600"
                            id="description" rows="3"></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="text-gray-700" for="poster">URL del Póster</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="url"
                            id="poster">
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>