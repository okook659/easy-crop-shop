<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Tableau de bord
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('clients.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5">
                        <i class="fa-solid fa-arrow-left"></i> Retour
                    </a>
                    <h1 class="text-lg mt-5">Informations sur le client <span class="font-semibold">{{ $client->designation }}</span></h1>
                    <table class='table w-full mt-4 text-lg border b-1 b-black'>
                        {{-- <thead class=' border b-2 border-black'>
                            <tr class="table-row">
                                <th class='p-3 font-semibold table-cell border b-1'>Désignation</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Téléphone</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Adresse</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Actions</th>
                            </tr>
                        </thead> --}}
                        <tbody class=''>
                           
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Désignation </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$client["designation"]}} </td>
                                </tr>
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Téléphone </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$client["telephone"]}} </td>
                                </tr>
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Adresse </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$client["adresse"]}} </td>
                                </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>