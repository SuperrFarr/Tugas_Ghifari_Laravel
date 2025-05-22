<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Selamat Datang, {{ Auth::user()->name }}! 👋</h1>
                <p class="text-gray-600 mb-6">
                    Ini adalah halaman dashboard utama. Kamu sudah berhasil login ke aplikasi.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold text-blue-800">Informasi</h2>
                        <p class="text-sm text-blue-700 mt-2">Ini adalah card info. Kamu bisa menambahkan modul di sini.</p>
                    </div>

                    <div class="bg-green-100 p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold text-green-800">Statistik</h2>
                        <p class="text-sm text-green-700 mt-2">Jumlah user, login terakhir, dll.</p>
                    </div>

                    <div class="bg-yellow-100 p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold text-yellow-800">Pengaturan</h2>
                        <p class="text-sm text-yellow-700 mt-2">Atur profil atau preferensi pengguna.</p>
                    </div>
                </div>

                <div class="mt-6">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
