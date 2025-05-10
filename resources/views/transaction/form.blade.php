@php
    $today = date('Y-m-d');
@endphp
<x-app-layout>
    <x-slot name="script">
        @vite(['resources/js/slim_select.js'])
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           {{ $updating ? "Modifier une transaction" : "Créer une transaction" }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                @if($updating)
                    <form action="{{ route('transactions.update', ['transaction' => $transaction]) }}" method="POST" class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
                        @csrf
                        @method('PUT')
                @else
                    <form action="{{ route('transactions.store') }}" method="POST" class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
                        @csrf
                @endif

                    <div class="mb-4">
                        <label for="client_id" class="block text-gray-700 font-medium mb-2">Client</label>
                        <select name="client_id" id="client_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @if($updating)
                                <option value="{{ $transaction['client_id'] }}">{{ $transaction->client->designation }}</option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->designation }}</option>
                                @endforeach
                            @else
                                <option value="">Choisir le client</option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->designation }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="produit_id" class="block text-gray-700 font-medium mb-2">Produit</label>
                        <select name="produit_id" id="produit_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @if($updating)
                                <option value="{{ $transaction['produit_id'] }}">{{ $transaction->produit->nom }}</option>
                                @foreach ($produits as $produit)
                                    <option value="{{ $produit->id }}">{{ $produit->nom }}</option>
                                @endforeach
                            @else
                                <option value="">Choisir le produit</option>
                                @foreach ($produits as $produit)
                                    <option value="{{ $produit->id }}">{{ $produit->nom }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="typeTransaction" class="block text-gray-700 font-medium mb-2">Type de transaction</label>
                        <select name="typeTransaction" id="typeTransaction" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @if($updating)
                                <option value="{{ $transaction['typeTransaction'] }}">{{ ucfirst($transaction['typeTransaction']) }}</option>
                                @if($transaction['typeTransaction'] === "distribution")
                                    <option value="vente">Vente</option>
                                @else
                                    <option value="distribution">Distribution</option>
                                @endif
                            @else
                                <option value="">Renseigner le type</option>
                                <option value="distribution">Distribution</option>
                                <option value="vente">Vente</option>
                            @endif
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="dateTransaction" class="block text-gray-700 font-medium mb-2">Date de transaction</label>
                        <input required type="date" min="{{ $today }}" name="dateTransaction" id="dateTransaction" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            @if($updating)
                                value="{{ $transaction['dateTransaction'] }}"
                            @endif
                        />
                    </div>

                    <div class="mb-4">
                        <label for="quantiteTransitee" class="block text-gray-700 font-medium mb-2">Quantité transitée</label>
                        <input required type="number" name="quantiteTransitee" id="quantiteTransitee" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            @if($updating)
                                value="{{ $transaction['quantiteTransitee'] }}"
                            @endif
                        />
                    </div>

                    <div class="mb-4">
                        <label for="prix" class="block text-gray-700 font-medium mb-2">Prix</label>
                        <input required type="number" name="prix" id="prix" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            @if($updating)
                                value="{{ $transaction['prix'] }}"
                            @endif
                        />
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Valider
                        </button>
                        <a href="{{ route('transactions.index') }}"
                            class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Annuler
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
