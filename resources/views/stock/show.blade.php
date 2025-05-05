<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Détails du stock
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Produit :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $stock->produit->nom }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Quantité :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $stock->quantiteStock }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Lieu :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $stock->lieu }}</p>
                </div>

                <a href="{{ route('stocks.index') }}"
                    class="inline-block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Retour à la liste
                </a>
                <a href="{{ route('stocks.edit', ['stock' => $stock->id]) }}"
                    class="inline-block mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Modifier
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
