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
                    <a href="{{ route('transactions.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5">
                        <i class="fa-solid fa-arrow-left"></i> Retour
                    </a>
                    <h1 class="text-lg mt-5">Informations sur la transaction</h1>
                    <table class='table w-full mt-4 text-lg border b-1 b-black'>
                        
                        <tbody class=''>
                           
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Acheteur </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{ $transaction->client->designation }} </td>
                                </tr>
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Produit </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{ $transaction->produit->nom }} </td>
                                </tr>
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Type de la Transaction </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$transaction["typeTransaction"]}} </td>
                                </tr>
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Date de la Transaction </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$transaction["dateTransaction"]}} </td>
                                </tr>
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Quantité transitée </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$transaction["quantiteTransitee"]}} </td>
                                </tr>
                                <tr class="table-row">
                                    <td class='p-3 text-gray-900 font-semibold text-lg table-cell text-center border b-1'> Prix de la Transaction </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$transaction["prix"]}} </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>