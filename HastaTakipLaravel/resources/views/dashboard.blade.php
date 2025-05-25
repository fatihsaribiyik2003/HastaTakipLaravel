<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hasta Takip Sistemi Paneli
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Bilgi Kartları -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-bold">Toplam Hastalar</h3>
                    <p class="text-2xl mt-2">{{ $totalPatients ?? '0' }}</p>
                </div>

                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-bold">Bugünkü Randevular</h3>
                    <p class="text-2xl mt-2">{{ $todaysAppointments ?? '0' }}</p>
                </div>

                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-bold">Bekleyen Test Sonuçları</h3>
                    <p class="text-2xl mt-2">{{ $pendingTests ?? '0' }}</p>
                </div>
            </div>

            <!-- Hızlı İşlemler -->
            <div class="bg-white p-6 shadow rounded-lg">
                <h3 class="text-lg font-bold mb-4">Hızlı İşlemler</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="{{ route('patients.create') }}" class="bg-blue-500 text-white p-3 rounded-lg text-center">Yeni Hasta Kaydı</a>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
