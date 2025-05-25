<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Yeni Hasta Kaydı
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
            <form method="POST" action="{{ route('patients.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block font-bold mb-1">Ad Soyad</label>
                    <input type="text" name="name" class="w-full border p-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-1">T.C. Kimlik No</label>
                    <input type="text" name="tc_kimlik_no" class="w-full border p-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-1">Doğum Tarihi</label>
                    <input type="date" name="birth_date" class="w-full border p-2 rounded">
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-1">Telefon</label>
                    <input type="text" name="phone" class="w-full border p-2 rounded">
                </div>

                <button type="submit" class="btn btn-primary">
                    Kaydet
                </button>


            </form>
        </div>
    </div>
</x-app-layout>