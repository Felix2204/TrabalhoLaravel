<x-nav-link :href="route('residents.index')" :active="request()->routeIs('residents.index')">
    {{ __('Residentes') }}
</x-nav-link>




<div class="flex justify-end mt-4">
    <a href="{{ route('residents.create') }}"
       class="inline-flex items-center px-6 py-3 text-blue-500 bg-gradient-to-r from-blue-500 to-blue-700 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 rounded-full shadow-lg text-lg font-semibold transition duration-300 transform hover:scale-105 ease-in-out dark:from-blue-500 dark:to-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-800">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
        </svg>
        Adicionar +
    </a>
</div>


<div class="space-y-4 mt-6">
    @foreach($residents as $resident)
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    {{ $resident->nome }}
                </h3>
                <div class="flex space-x-3">
                    <a href="{{ route('residents.edit', ['resident' => $resident->id]) }}"
                       class="inline-flex items-center px-3 py-2 text-blue-600 bg-blue-100 rounded-lg hover:text-blue-800 dark:text-blue-500 dark:bg-blue-900 dark:hover:bg-blue-800 font-medium transition duration-200 ease-in-out">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.414 2.586a2 2 0 010 2.828l-9 9a2 2 0 01-.828.485l-4 1a1 1 0 01-1.263-1.263l1-4a2 2 0 01.485-.828l9-9a2 2 0 012.828 0z"></path>
                        </svg>
                        Editar
                    </a>
                    <a href="{{ route('residents.destroy', ['resident' => $resident->id]) }}"
                       class="inline-flex items-center px-3 py-2 text-red-600 bg-red-100 rounded-lg hover:text-red-800 dark:text-red-500 dark:bg-red-900 dark:hover:bg-red-800 font-medium transition duration-200 ease-in-out">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H5a1 1 0 100 2h10a1 1 0 100-2h-2.382l-.724-1.447A1 1 0 0011 2H9zM5 8a1 1 0 011 1v7a1 1 0 001 1h6a1 1 0 001-1V9a1 1 0 112 0v7a3 3 0 01-3 3H7a3 3 0 01-3-3V9a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Deletar
                    </a>
                </div>
            </div>
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                <p><strong>Bloco:</strong> {{ $resident->bloco }}</p>
                <p><strong>Prédio:</strong> {{ $resident->predio }}</p>
                <p><strong>Apartamento:</strong> {{ $resident->apartamento }}</p>
            </div>
        </div>
    @endforeach
</div>
