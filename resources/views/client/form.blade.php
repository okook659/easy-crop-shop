<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           {{ $updating ? "Modifier un client" : "Création de client" }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($updating)
                    <form action="{{ route('clients.update', ['client'=>$client]) }}" method="POST" >
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{ route('clients.store') }}" method="POST">
                            @csrf
                    @endif
                    <table class="w-full">
                        <tbody class="w-full">
                            <tr class="w-full mb-4 flex justify-between">
                              <td class="w-1/4">
                                  <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="designation">
                                      Désignation
                                    </label>
                              </td>
                              <td class="w-2/4">
                                  <input name="designation" class="
                                   shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight text-lg focus:outline-none focus:shadow-outline" id="designation" type="text"
                                   placeholder="Renseigner la désignation du client" value="{{ $updating ? $client->designation : ''  }}"   />
                              </td>
                            </tr>
                            <tr class="flex justify-between mb-4">
                                <td>
                                    <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="designation">
                                        Telephone
                                      </label>
                                </td>
                                <td class="w-2/4">
                                    <input name="telephone" 
                                    placeholder="Renseigner le numéro de téléphone"
                                    class="
                                    shadow appearance-none border rounded w-full py-2 px-3 text-lg text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telephone" type="text"
                                    value="{{ $updating ? $client->telephone : ''  }}" />
                                </td>
                            </tr>
                            <tr class="flex justify-between mb-4">
                                <td class="w-1/4">
                                    <label class="block text-gray-700 text-lg font-bold mb-2" htmlFor="adresse">
                                        Adresse
                                      </label>
                                </td>
                                <td class="w-2/4">
                                    <input name="adresse" class="shadow appearance-none border text-lg rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adresse" type="text" placeholder="Renseigner l'adresse du client" 
                                    value="{{ $updating ? $client->adresse : ''  }}"/>
                                </td>
                            </tr>
                           
                            <tr class="flex justify-center align-center mb-4">
                                <td>
                                    <button class="cursor-pointer w-full bg-stone-600 ml-px hover:bg-stone-500 text-white font-bold py-2 px-4 rounded ">
                                        <a href="{{ route('clients.index') }}" >Retour</a>
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