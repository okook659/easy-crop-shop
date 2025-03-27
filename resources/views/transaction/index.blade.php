<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Liste des transactions
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <a href="{{ route('transactions.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ajouter une transaction
                  </a>
                     <table class='table w-full mt-4 text-lg border b-1'>
                        <thead class=' border b-2 border-gray-200'>
                            <tr class="table-row">
                                <th class='p-3 font-semibold table-cell border b-1'>Acheteur</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Type Transaction</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Date Transaction</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Quantité Transitée</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Prix</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=''>
                            @foreach ($transactions as $transaction)
                                <tr class="table-row">
                                    <td class='p-3 text-white table-cell text-center border b-1'> {{$transaction["acheteur"]}} </td>
                                    <td class='p-3 text-white table-cell text-center border b-1'> {{$transaction["typeTransaction"]}} </td>
                                    <td class='p-3 text-white table-cell text-center border b-1'> {{$transaction["dateTransaction"]}} </td>
                                    <td class='p-3 text-white table-cell text-center border b-1'> {{$transaction["quantiteTransitee"]}} </td>
                                    <td class='p-3 text-white table-cell text-center border b-1'> {{$transaction["prix"]}} </td>
                                    <td class='p-3 text-white table-cell text-center border b-1'> 
                                        <div class="flex">
                                            <a href="{{ route('transactions.edit', ['transaction' => $transaction->id]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-2">
                                              Modifier
                                            </a>
                                            <span class="ml-2"></span>
                                            <a href="{{ route('transactions.destroy', ['transaction' => $transaction]) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">
                                                Supprimer
                                              </a>
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
