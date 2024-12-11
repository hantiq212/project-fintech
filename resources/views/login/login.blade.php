<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="login.css"> -->
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Left Section -->
        <div class="w-1/2 bg-gray-200 p-10">
            <ul class="space-y-6">
                <li class="flex items-center">
                    <span class="material-icons">laptop</span>
                    <span class="ml-4">Kelola jaminan Laptop Anda</span>
                </li>
                <li class="flex items-center">
                    <span class="material-icons">settings</span>
                    <span class="ml-4">Unduh driver dan perangkat lunak Laptop Anda</span>
                </li>
                <li class="flex items-center">
                    <span class="material-icons">support_agent</span>
                    <span class="ml-4">Dapatkan dukungan teknis dan lacak perbaikan status Anda</span>
                </li>
                <li class="flex items-center">
                    <span class="material-icons">shopping_cart</span>
                    <span class="ml-4">Pembayaran cepat dan pelacakan pesanan dengan mudah</span>
                </li>
                <li class="flex items-center">
                    <span class="material-icons">local_offer</span>
                    <span class="ml-4">Dapatkan penawaran dan diskon eksklusif</span>
                </li>
            </ul>
        </div>
        <!-- Right Section -->
        <div class="w-1/2 bg-gray-300 p-10 flex flex-col justify-center">
            <h2 class="text-3xl font-bold mb-6">Masuk Akun</h2>
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Akun</label>
                    <input type="email" id="email" placeholder="Masukkan Email Anda" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" placeholder="Password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Ingatkan Saya</label>
                </div>
                <button type="submit" class="w-full bg-black text-white py-2 rounded-md text-lg">Masuk</button>
            </form>
            <div class="mt-4 text-center">
                <p class="text-sm">Tidak Punya Akun? <a href="#" class="text-indigo-600">Daftar Sekarang</a></p>
                <p class="text-sm mt-2">Atau Masuk Dengan</p>
                <div class="flex justify-center space-x-4 mt-2">
                    <a href="#" class="text-blue-600"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-red-600"><i class="fab fa-google"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-apple"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
