<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar Akun</h2>
        <p class="text-center mb-6">Jika Anda sudah memiliki akun, Anda dapat langsung masuk tanpa perlu mendaftarkan akun yang baru.</p>
        <div class="flex justify-center space-x-4 mb-6">
            <button class="bg-gray-300 text-black px-4 py-2 rounded flex items-center space-x-2 border border-black">
                <img src="img/fb.png" alt="Facebook Icon" class="w-5 h-5"><span>Daftar Dengan </span>
            </button>
            <button class="bg-gray-300 text-black px-4 py-2 rounded flex items-center space-x-2 border border-black">
                <img src="img/gl.png" alt="Google Icon" class="w-5 h-5"><span>Daftar Dengan </span>
            </button>
            <button class="bg-gray-300 text-black px-4 py-2 rounded flex items-center space-x-2 border border-black">
                <img src="img/aple.png" alt="Apple Icon" class="w-5 h-5"><span>Daftar Dengan </span>
            </button>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Akun</label>
                <input type="email" name="email" placeholder="Masukkan Email Anda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" placeholder="Gabungan 8 hingga 25 huruf (besar/kecil), angka, dan simbol tanpa spasi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Masukkan Ulang Password</label>
                <input type="password" name="password_confirmation" placeholder="Masukkan kembali password anda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Tanggal Lahir</label>
                <input type="date" name="birth_date" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="terms" class="form-checkbox text-blue-600">
                    <span class="ml-2">Saya menyetujui seluruh ketentuan berikut ini dan Kebijakan Privasi.</span>
                </label>
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="privacy_policy" class="form-checkbox text-blue-600">
                    <span class="ml-2">Saya mengetahui dan menyetujui <a href="#" class="text-blue-600">Kebijakan Privasi</a></span>
                </label>
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="newsletter" class="form-checkbox text-blue-600">
                    <span class="ml-2">Dapatkan berita terbaru dan update melalui email.</span>
                </label>
            </div>
            <button class="bg-black text-white px-4 py-2 rounded w-full">Daftar</button>
        </form>
    </div>
</body>
</html>
