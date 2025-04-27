<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Liste des stocks
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(session('message'))
                        <div id="message" class="mx-auto p-6 mb-6 flex justify-between {{ session('success') ? 'bg-emerald-400 text-gray-700' : 'bg-rose-500 text-white' }}">
                           <p> {{ session('message') }}</p> 
                            <span class="ml-5"><i class="fa-solid fa-xmark cursor-pointer" id="close-btn"></i></span>
                        </div>
                    @endif

                    <a href="{{ route('stocks.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fa-solid fa-plus"></i> Ajouter un stock
                      </a>
                     <table class='table w-full mt-4 text-lg border b-1'>
                        <thead class=' border b-2 border-gray-200'>
                            <tr class="table-row">
                                <th class='p-3 font-semibold table-cell border b-1'>Produit</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Quantite</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Lieu</th>
                                <th class='p-3 font-semibold table-cell border b-1'>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=''>
                            @foreach ($stocks as $stock)
                                <tr class="table-row">
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$stock->produit->nom}} </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$stock["quantiteStock"]}} </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> {{$stock["lieu"]}} </td>
                                    <td class='p-3 text-gray-700 table-cell text-center border b-1'> 
                                        <div class="flex text-center justify-center">
                                            <a href="{{ route('stocks.show', ['stock' => $stock->id]) }}" class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded ml-2">
                                                <i class="fa-solid fa-eye" title="afficher"></i>
                                            </a>
                                            <span class="ml-2"></span>
                                            <a href="{{ route('stocks.edit', ['stock' => $stock->id]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-2">
                                                <i class="fa-solid fa-pen-to-square" title="modifier"></i>
                                            </a>
                                            <span class="ml-2"></span>
                                              <form action="{{ route('stocks.destroy', ['stock' => $stock->id]) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce stock ?');">
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

    <x-slot name="script">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $('#message').fadeOut(300);
                }, 5000); // 5000 ms = 5 sec
        
                $('#close-btn').on("click", function() {
                    $('#message').fadeOut(300);
                });
            });
        </script>
        
    </x-slot>
</x-app-layout>
