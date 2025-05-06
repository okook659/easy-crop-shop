<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full max-w-2xl mx-auto mt-10">
                    <canvas id="myChart"></canvas>
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
                label: 'Ventes',
                data: {!! json_encode($data) !!},
                backgroundColor: 'rgba(99, 102, 241, 0.5)',
                borderColor: 'rgba(99, 102, 241, 1)',
                borderWidth: 1
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
