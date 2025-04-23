<x-app-layout>
    <x-slot name="script">
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#client_id').select2();
            });
            $(document).ready(function() {
                $('#produit_id').select2();
            });
        </script>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           {{ $updating ? "Modifier une transaction" : "Créer une transaction" }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($updating)
                        <form action="{{ route('transactions.update', ['transaction'=>$transaction]) }}" method="post" >
                            @method("PUT")
                            @csrf
                    @else
                        <form action="{{ route('transactions.store') }}" method="post">
                            @method("POST")
                            @csrf
                    @endif
                    
                      <table class="w-full">
                        <tbody class="w-full">
                            <tr class="w-full mb-4 flex justify-between">
                                <td class="w-1/4">
                                    <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="client_id">
                                        Client
                                      </label>
                                </td>
                                <td class="w-2/4">
                                    <select name="client_id"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-lg focus:outline-none focus:shadow-outline" id="client_id" >
                                        @if ($updating)
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
                                </td>
                              </tr>
                            <tr class="w-full mb-4 flex justify-between">
                                <td class="w-1/4">
                                    <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="produit_id">
                                        Produit
                                      </label>
                                </td>
                                <td class="w-2/4">
                                    <select name="produit_id" id="produit_id" class="
                                    shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                                    @if ($updating)
                                    <option value="{{ $transaction['produit_id'] }}">{{ $transaction->produit->nom }}</option>
                                    @foreach($produits as $produit)
                                    <option value="{{ $produit->id }}">{{ $produit->nom }}</option>
                                    @endforeach
                                    @else
                                    <option value="">Choisir le produit</option>
                                        @foreach($produits as $produit)
                                        <option value="{{ $produit->id }}">{{ $produit->nom }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </td>
                              </tr>
                            <tr class="flex justify-between mb-4">
                                <td class="w-1/4">
                                    <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="typeTransaction">
                                        Type de transaction
                                      </label>
                                </td>
                                <td class="w-2/4">
                                    <select class="w-full shadow appearance-none border rounded py-2 px-5 text-black leading-tight focus:outline-none focus:shadow-outline" name="typeTransaction" id="typeTransaction">
                                        @if ($updating)
                                        <option value="{{ $transaction['typeTransaction'] }}">{{ $transaction['typeTransaction'] }} </option>
                                        @if ($transaction['typeTransaction'] == "distribution")
                                        <option value="vente">Vente</option>  
                                        @else
                                        <option value="distribution">Distribution</option>
                                        @endif
                                        @else
                                        <option value="">Renseigner le type de distribution</option>
                                        <option value="distribution">Distribution</option>
                                        <option value="vente">Vente</option>
                                        @endif
                                    </select>
                                </td>
                            </tr>
                            <tr class="flex justify-between mb-4">
                                <td class="w-1/4">
                                    <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="dateTransaction">
                                        Date de transaction
                                      </label>
                                </td>
                                <td class="w-2/4">
                                    <input name="dateTransaction" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dateTransaction" type="date" 
                                    @if ($updating)
                                        value="{{ $transaction['dateTransaction'] }}"
                                    @endif
                                    />
                                </td>
                            </tr>
                            <tr class="flex justify-between mb-4">
                                <td class="w-1/4">
                                    <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="quantiteTransitee">
                                        Quantité transitée
                                      </label>
                                </td>
                                <td class="w-2/4">
                                    <input name="quantiteTransitee" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantiteTransitee" type="number" 
                                    @if ($updating)
                                        value="{{ $transaction['quantiteTransitee'] }}"
                                    @endif
                                    />
                                </td>
                            </tr>
                            <tr class="flex justify-between mb-4">
                                <td class="w-1/4">
                                    <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="prix">
                                        Prix
                                      </label>
                                </td>
                                <td class="w-2/4">
                                    <input name="prix" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prix" type="number" 
                                    @if ($updating)
                                        value="{{ $transaction['prix'] }}"
                                    @endif
                                    />
                                </td>
                            </tr>
                            <tr class="flex justify-around align-center mb-4">
                                <td class="ml-16">
                                        <a class="cursor-pointer w-full bg-stone-600 ml-px hover:bg-stone-500 text-white font-bold py-2 px-4 rounded " href="{{ route('transactions.index') }}" >Retour</a>
                                </td>
                                <td>
                                    <button type="submit" class="cursor-pointer w-full bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded">Valider</button>
                                </td>
                            </tr>
                        </tbody>
                      </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>