<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="cards flex justify-around mt-6 mb-12">
                    <div class="shadow-lg shadow-green-500/50 rounded-lg p-6 max-w-sm w-64">
                        <h2 class="text-lg font-semibold  text-center">Nombre de clients</h2>
                        <hr>
                        <p class="mt-2 text-6xl font-bold text-green-500 text-center">{{ $totalClients }}</p>
                    </div>
                    <div class="shadow-lg shadow-indigo-500/50 rounded-lg p-6 max-w-sm w-64">
                        <h2 class="text-lg font-semibold text-center">Nombre de produits</h2>
                        <hr>
                        <p class="mt-2 text-6xl font-bold text-indigo-500 text-center">{{ $totalProduits }}</p>
                    </div>
                    <div class="shadow-lg shadow-red-500/50 rounded-lg p-6 max-w-sm w-64">
                        <h2 class="text-lg font-semibold text-center">Nombre de transactions</h2>
                        <hr>
                        <p class="mt-2 text-6xl font-bold text-red-500 text-center">{{ $totalTransactions }}</p>
                    </div>
                </div>
                <div class="w-full mx-auto mt-10 flex justify-center align-center p-6">
                    <div class="w-1/2 h-80">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="h-80">
                        <canvas id="myPie"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <x-slot name="script">

        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar', // 'line', 'pie', etc.
                data: {
                    labels: {!! json_encode($labels) !!},
                    datasets: [{
                        data: {!! json_encode([$totalVentes, $totalDistributions]) !!},
                        backgroundColor: ["rgba(250, 192,19, 0.8)",
                  "rgba(253, 135, 135, 0.8)",],
                        borderColor: 'rgba(0, 0, 0, 1)',
                        borderWidth: 1,
                        borderRadius: 5,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            const ctx2 = document.getElementById('myPie');

            new Chart(ctx2, {
                type: 'doughnut', // 'line', 'pie', etc.
                data: {
                    labels: {!! json_encode($labelsPie) !!},
                    datasets: [{
                        data: {!! json_encode([$totalProduitVendu, $totalProduitStock, $totalProduitDistribue]) !!},
                        backgroundColor: [
                  "rgba(43, 63, 229, 0.8)",
                  "rgba(250, 192,19, 0.8)",
                  "rgba(253, 135, 135, 0.8)",
                ],
                        borderColor: 'rgba(0, 0, 0, 1)',
                        borderWidth: 1,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </x-slot>
</x-app-layout>
