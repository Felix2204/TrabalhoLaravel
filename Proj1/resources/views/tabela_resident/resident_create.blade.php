<h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Bem-vindo ao Criar</h2>

@if (session()->has('message'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 border border-green-400 rounded">
        {{ session()->get('message') }}
    </div>
@endif

<form action="{{ route('residents.store') }}" method="post" class="space-y-6 max-w-lg mx-auto">
    @csrf
    
    <div>
        <label for="nome" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome" value="felix" 
               class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div>
        <label for="bloco" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bloco</label>
        <input type="text" name="bloco" id="bloco" placeholder="Bloco" value="B" 
               class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div>
        <label for="predio" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Prédio</label>
        <input type="text" name="predio" id="predio" placeholder="Prédio" value="B" 
               class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div>
        <label for="apartamento" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Apartamento</label>
        <input type="number" name="apartamento" id="apartamento" placeholder="Apartamento" value="233" 
               class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div>
        <button type="submit" 
                class="w-full px-4 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">
            Criar
        </button>
    </div>
</form>
