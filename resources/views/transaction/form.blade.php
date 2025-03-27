<x-app-layout>
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
                        <form action="{{ route('transactions.update', ['transaction'=>$transaction]) }}" method="put" >
                            @csrf
                    @else
                        <form action="{{ route('transactions.store') }}" method="post">
                            @csrf
                    @endif
                    {{-- <div class="flex justify-around">
                        <div class="mb-4 flex">
                            <label class="block text-white text-sm font-bold mb-2" for="acheteur">
                                Acheteur
                            </label>
                            <input class="shadow appearance-none border rounded w-50 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="acheteur" type="text" placeholder="Acheteur">
                        </div>
                        <div class="mb-4 flex">
                            <label class="block text-white text-sm font-bold mb-2" for="acheteur">
                                Acheteur
                            </label>
                            <input class="shadow appearance-none border rounded w-50 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="acheteur" type="text" placeholder="Acheteur">
                        </div>
                      </div> --}}
                      <table class="w-full">
                        <tbody class="w-full">
                            <tr class="w-full mb-4 flex justify-between">
                              <td class="">
                                  <label class="block text-white text-sm font-bold mb-2" htmlFor="acheteur">
                                      Acheteur
                                    </label>
                              </td>
                              <td class="">
                                  <input name="acheteur" class="
                                   shadow appearance-none border rounded w-50 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="acheteur" type="text"    />
                              </td>
                            </tr>
                            <tr class="w-full mb-4 flex justify-between">
                                <td class="">
                                    <label class="block text-white text-sm font-bold mb-2" htmlFor="produit">
                                        Produit
                                      </label>
                                </td>
                                <td class="">
                                    <select name="produit" id="produit" class="
                                    shadow appearance-none border rounded w-50 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                                        <option value="">Choisir le produit</option>
                                        @foreach($produits as $produit)
                                            <option value="{{ $produit->id }}">{{ $produit->nom }}</option>
                                        @endforeach
                                    </select>
                                </td>
                              </tr>
                            <tr class="flex justify-between mb-4">
                                <td>
                                    <label class="block text-white text-sm font-bold mb-2" htmlFor="acheteur">
                                        Type de transaction
                                      </label>
                                </td>
                                <td class="">
                                    <select class="w-50 shadow appearance-none border rounded py-2 px-5 text-black leading-tight focus:outline-none focus:shadow-outline" name="typeTransaction" id="typeTransaction">
                                        <option value="">Renseigner le type de distribution</option>
                                        <option value="distribution">Distribution</option>
                                        <option value="vente">Vente</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="flex justify-between mb-4">
                                <td class="">
                                    <label class="block text-white text-sm font-bold mb-2" htmlFor="dateTransaction">
                                        Date de transaction
                                      </label>
                                </td>
                                <td>
                                    <input name="dateTransaction" class="shadow appearance-none border rounded w-50 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dateTransaction" type="date" />
                                </td>
                            </tr>
                            <tr class="flex justify-between mb-4">
                                <td class="">
                                    <label class="block text-white text-sm font-bold mb-2" htmlFor="quantiteTransitee">
                                        Quantité transitée
                                      </label>
                                </td>
                                <td>
                                    <input name="quantiteTransitee" class="shadow appearance-none border rounded w-50 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantiteTransitee" type="number" />
                                </td>
                            </tr>
                            <tr class="flex justify-between mb-4">
                                <td class="">
                                    <label class="block text-white text-sm font-bold mb-2" htmlFor="prix">
                                        Prix
                                      </label>
                                </td>
                                <td>
                                    <input name="prix" class="shadow appearance-none border rounded w-50 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prix" type="number" />
                                </td>
                            </tr>
                            <tr class="flex justify-center align-center mb-4">
                                <td>
                                    <button class="cursor-pointer w-full bg-stone-600 ml-px hover:bg-stone-500 text-white font-bold py-2 px-4 rounded ">
                                        <a href="{{ route('transactions.index') }}" >Retour</a>
                                    </button>
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