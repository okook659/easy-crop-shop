<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Détails de la transaction
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">     
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Client :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $transaction->client->designation }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Produit :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $transaction->produit->designation }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Type :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $transaction->typeTransaction }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Date :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $transaction->dateTransaction }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Prix :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $transaction->prix }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Quantité :</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $transaction->quantiteTransitee }}</p>
                </div>

                <a href="{{ route('transactions.index') }}"
                    class="inline-block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Retour à la liste
                </a>
                <a href="{{ route('transactions.edit', ['transaction' => $transaction->id]) }}"
                    class="inline-block mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Modifier
                </a>
            </div>
        </div>
    </div>
</x-app-layout>