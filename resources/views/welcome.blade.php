<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="index.css"> -->
</head>
<body class="bg-gray-200">
    <header class="flex justify-end p-4 bg-gray-200">
        <nav class="space-x-7 lg:mr-9 lg:pr-9">
            <a href="#" class="text-gray-700">FAQ</a>
            <a href="#" class="text-gray-700">Layanan</a>
            <a href="#" class="text-gray-700">Blog</a>
            <a href="#" class="text-gray-700">Kontak</a>
        </nav>
    </header>
    <main class="flex flex-col md:flex-row items-center justify-between p-8">
        <div class="text-center md:text-left md:w-1/2">
            <h1 class="text-2xl font-bold">Halo, Selamat Datang</h1>
            <h2 class="text-4xl font-bold mt-4">Satu Akun, Semua Kebutuhan</h2>
            <p class="mt-4 text-gray-700">Masuk ke akun Anda dan dapatkan semua yang Anda perlukan dalam satu portal!</p>
            <div class="mt-8 space-x-4">
                <button class="bg-white text-black font-bold py-2 px-4 rounded shadow">Masuk</button>
                <button class="bg-white text-black font-bold py-2 px-4 rounded shadow">Daftar</button>
            </div>
        </div>
        <div class="image">
            <img src="{{ asset('img/gacor.png') }}" alt="Monitor 1">
        </div>
    </main>
</body>
</html>
