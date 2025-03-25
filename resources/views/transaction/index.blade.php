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
                    {{-- <table class='table w-full mt-4 b-2 text-lg'>
                        <thead class='bg-gray-50 border-b-2 border-gray-200'>
                            <tr class="table-row">
                                <th class='p-3 font-semibold  table-cell border b-2'>Acheteur</th>
                                <th class='p-3 font-semibold  table-cell'>Type Transaction</th>
                                <th class='p-3 font-semibold  table-cell'>Date Transaction</th>
                                <th class='p-3 font-semibold  table-cell'>Quantité Transitée</th>
                                <th class='p-3 font-semibold  table-cell'>Prix</th>
                                <th class='p-3 font-semibold  table-cell'>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=''>
                            @foreach ($transactions as $transaction)
                                <tr class="table-row">
                                    <td class='p-3 text-white table-cell border b-2'> {{$transaction["acheteur"]}} </td>
                                    <td class='p-3 text-white table-cell'> {{$transaction["typeTransaction"]}} </td>
                                    <td class='p-3 text-white table-cell'> {{$transaction["dateTransaction"]}} </td>
                                    <td class='p-3 text-white table-cell'> {{$transaction["quantiteTransitee"]}} </td>
                                    <td class='p-3 text-white table-cell'> {{$transaction["prix"]}} </td>
                                    <td class='p-3 text-white table-cell'> {{$transaction["acheteur"]}} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800">Liste des transactions</h3>
                           
                        </div>
                        <div class="ml-3">
                            <div class="w-full max-w-sm min-w-[200px] relative">
                            <div class="relative">
                                <input
                                class="bg-white w-full pr-11 h-10 pl-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-200 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                                placeholder="Rechercher une transaction"
                                />
                                <button
                                class="absolute h-8 w-8 right-1 top-1 my-auto px-2 flex items-center bg-white rounded "
                                type="button"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8 text-slate-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                      <table class="w-full text-left table-auto min-w-max">
                        <thead>
                          <tr>
                            <th class="p-4 border-b border-slate-200 bg-slate-50">
                              <p class="text-sm font-normal leading-none text-slate-500">
                                Acheteur
                              </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-slate-50">
                                <p class="text-sm font-normal leading-none text-slate-500">
                                  Type
                                </p>
                              </th>
                              <th class="p-4 border-b border-slate-200 bg-slate-50">
                                <p class="text-sm font-normal leading-none text-slate-500">
                                  Date
                                </p>
                              </th>
                              <th class="p-4 border-b border-slate-200 bg-slate-50">
                                <p class="text-sm font-normal leading-none text-slate-500">
                                  Quantité
                                </p>
                              </th>
                              <th class="p-4 border-b border-slate-200 bg-slate-50">
                                <p class="text-sm font-normal leading-none text-slate-500">
                                  Prix
                                </p>
                              </th>
                              <th class="p-4 border-b border-slate-200 bg-slate-50">
                                <p class="text-sm font-normal leading-none text-slate-500">
                                  Actions
                                </p>
                              </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="hover:bg-slate-50 border-b border-slate-200">
                            <td class="p-4 py-5">
                              <p class="block font-semibold text-sm text-slate-800">PROJ1001</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">John Doe</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">$1,200.00</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">2024-08-01</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">2024-08-15</p>
                            </td>
                          </tr>
                          <tr class="hover:bg-slate-50 border-b border-slate-200">
                            <td class="p-4 py-5">
                              <p class="block font-semibold text-sm text-slate-800">PROJ1002</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">Jane Smith</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">$850.00</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">2024-08-05</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">2024-08-20</p>
                            </td>
                          </tr>
                          <tr class="hover:bg-slate-50 border-b border-slate-200">
                            <td class="p-4 py-5">
                              <p class="block font-semibold text-sm text-slate-800">PROJ1003</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">Acme Corp</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">$2,500.00</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">2024-08-07</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">2024-08-21</p>
                            </td>
                          </tr>
                          <tr class="hover:bg-slate-50 border-b border-slate-200">
                            <td class="p-4 py-5">
                              <p class="block font-semibold text-sm text-slate-800">PROJ1004</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">Global Inc</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">$4,750.00</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">2024-08-10</p>
                            </td>
                            <td class="p-4 py-5">
                              <p class="text-sm text-slate-500">2024-08-25</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                     
                      <div class="flex justify-between items-center px-4 py-3">
                        <div class="text-sm text-slate-500">
                          Showing <b>1-5</b> of 45
                        </div>
                        <div class="flex space-x-1">
                          <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
                            Prev
                          </button>
                          <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-white bg-slate-800 border border-slate-800 rounded hover:bg-slate-600 hover:border-slate-600 transition duration-200 ease">
                            1
                          </button>
                          <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
                            2
                          </button>
                          <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
                            3
                          </button>
                          <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
                            Next
                          </button>
                        </div>
                      </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
