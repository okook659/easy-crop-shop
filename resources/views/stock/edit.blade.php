<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Modifier le stock
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('stocks.update', ['stock' => $stock->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="produit_id" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Produit</label>
                        <select id="produit_id" name="produit_id" required
                            class="block appearance-none w-full bg-white dark:bg-gray-700 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-gray-900 dark:text-gray-100">
                            @foreach ($produits as $produit)
                                <option value="{{ $produit->id }}" {{ $stock->produit_id == $produit->id ? 'selected' : '' }}>
                                    {{ $produit->nom }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="quantiteStock" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Quantité</label>
                        <input type="number" id="quantiteStock" name="quantiteStock" min="0" required
                            value="{{ old('quantiteStock', $stock->quantiteStock) }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-gray-100 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Quantité en stock">
                    </div>

                    <div class="mb-4">
                        <label for="lieu" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Lieu</label>
                        <input type="text" id="lieu" name="lieu" required
                            value="{{ old('lieu', $stock->lieu) }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-gray-100 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Lieu du stock">
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Modifier
                        </button>
                        <a href="{{ route('stocks.show', ['stock' => $stock->id]) }}"
                            class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
