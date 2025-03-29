<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Liste des clients
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('clients.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fa-solid fa-plus"></i> Ajouter un client
                      </a>
                      <table class='table w-full mt-4 text-lg border b-1 b-black'>
                        <thead class=' border b-2 border-black'>
                            <tr class="table-row">
                                <th class='p-3 font-semibold table-cell border b-1'>Désignation</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Téléphone</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Adresse</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=''>
                            @foreach ($clients as $client)
                                <tr class="table-row">
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$client["designation"]}} </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$client["telephone"]}} </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$client["adresse"]}} </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> 
                                        <div class="flex text-center justify-center">
                                            <a href="{{ route('clients.show', ['client' => $client->id]) }}" class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded ml-2">
                                                <i class="fa-solid fa-eye" title="afficher"></i>
                                            </a>
                                            <span class="ml-2"></span>
                                            <a href="{{ route('clients.edit', ['client' => $client->id]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-2">
                                                <i class="fa-solid fa-pen-to-square" title="modifier"></i>
                                            </a>
                                            <span class="ml-2"></span>
                                            {{-- <a href="{{ route('clients.destroy', ['client' => $client->id]) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">
                                                Supprimer
                                              </a> --}}
                                              <form action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce client ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                    <i class="fa-solid fa-trash" title="supprimer"></i>
                                                </button>
                                            </form>
                                        </div>    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>