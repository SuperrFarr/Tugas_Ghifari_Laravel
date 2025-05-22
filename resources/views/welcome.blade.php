<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Selamat Datang</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .fade-in {
            animation: fadeIn 1.2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen flex items-center justify-center px-4">

    <div class="max-w-xl w-full text-center fade-in bg-white shadow-xl rounded-2xl p-10">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-blue-700 mb-6">Selamat Datang di <span class="text-blue-500">Web Ghifari</span></h1>
        <p class="text-gray-600 text-lg mb-8">Temukan fitur menarik setelah login. Aman, cepat, dan mudah digunakan.</p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('login') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg text-lg shadow-lg transition-all duration-300">
                Masuk
            </a>
            <a href="{{ route('register') }}"
               class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg text-lg shadow-lg transition-all duration-300">
                Daftar
            </a>
        </div>
    </div>

</body>
</html>
