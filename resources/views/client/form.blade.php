<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           {{ $updating ? "Modifier un client" : "Création de client" }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($updating)
                    <form action="{{ route('clients.update', ['client'=>$client]) }}" method="POST" class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{ route('clients.store') }}" method="POST" class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
                            @csrf
                    @endif
                  
                            <div class="mb-4">
                              
                                  <label class="block text-gray-700 font-medium mb-2" htmlFor="designation">
                                      Désignation
                                    </label>
                             
                                  <input name="designation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="designation" type="text"
                                   placeholder="Renseigner la désignation du client" value="{{ $updating ? $client->designation : ''  }}"   />
                            
                            </div>
                           
                                <div class="mb-4">
                                    <label class="block text-gray-700 font-medium mb-2" htmlFor="telephone">
                                        Telephone
                                      </label>
                                      
                                      <input name="telephone" 
                                      placeholder="Renseigner le numéro de téléphone"
                                      class="
                                      w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="telephone" type="text"
                                      value="{{ $updating ? $client->telephone : ''  }}" />
                                   
                                </div>
                            <div class="mb-4">

                                <label class="block text-gray-700 font-medium mb-2 htmlFor="adresse">
                                    Adresse
                                </label>
                            
                                <input name="adresse" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="adresse" type="text" placeholder="Renseigner l'adresse du client" 
                                value="{{ $updating ? $client->adresse : ''  }}"/>
                          
                        </div>
                           <div class="mb-4">

                               <button class="cursor-pointer w-full bg-stone-600 ml-px hover:bg-stone-500 text-white font-bold py-2 px-4 rounded ">
                                   <a href="{{ route('clients.index') }}" >Retour</a>
                                </button>
                                
                           </div>
                           <div class="mb-4">
                                <button type="submit" class="w-full bg-green-600 text-white font-medium py-2 px-4 rounded-md hover:bg-green-700 transition">Valider</button>
                                
                            </div>
                          
                        </form>
                </div>
            </div>
       
    </div>
</x-app-layout>