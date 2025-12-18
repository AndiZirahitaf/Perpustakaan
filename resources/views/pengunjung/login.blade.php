<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .bg-books {
            background-image: url('{{ asset("assets/img/bgbooks.png") }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-green-600">

    <div class="min-h-screen flex items-center justify-center px-4 py-10">

        <div class="bg-white w-full max-w-5xl rounded-2xl shadow-2xl grid grid-cols-1 md:grid-cols-2 overflow-hidden">

            <!-- ================= LEFT FORM ================= -->
            <div class="p-8 sm:p-10">
                
                <!-- Logo -->
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('assets/img/logoperpus.png') }}" class="w-12 h-12 object-contain">
                    <div>
                        <h1 class="text-2xl font-bold text-green-700 leading-tight">BookTech</h1>
                        <p class="text-sm text-gray-500 -mt-1">Perpustakaan Digital</p>
                    </div>
                </div>

                <h2 class="text-2xl font-bold mt-2">Selamat Datang Kembali</h2>
                <p class="text-gray-600 mt-1">Silakan login untuk melanjutkan</p>

                <!-- FORM -->
                <form class="mt-6 space-y-6" action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <!-- EMAIL -->
                    <div>
                        <label class="font-medium">Email</label>
                        <div class="relative mt-1">
                            <input type="email" name="email"
                                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 outline-none"
                                placeholder="Masukkan email">
                        </div>
                    </div>

                    <!-- PASSWORD -->
                    <div>
                        <label class="font-medium">Password</label>
                        <div class="relative mt-1">
                            <input id="passwordField" type="password" name="password"
                                class="w-full px-4 pr-12 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 outline-none"
                                placeholder="Masukkan password">

                            <!-- ICON EYE SHOW/HIDE -->
                            <button type="button"
                                onclick="togglePassword()"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700">

                                <svg id="eyeIconShow" class="w-5 h-5" fill="none"
                                     stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path d="M1 12s4-7 11-7 11 7 11 7-4 
                                    7-11 7S1 12 1 12z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>

                                <svg id="eyeIconHide" class="w-5 h-5 hidden" fill="none"
                                     stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path d="M17.94 17.94A10.94 10.94 0 0112 
                                    19c-7 0-11-7-11-7a21.81 21.81 0 014.75-5.79"/>
                                    <path d="M1 1l22 22"/>
                                </svg>

                            </button>
                        </div>
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="w-4 h-4">
                            <span>Ingat saya</span>
                        </label>
                        <a href="#" class="text-green-700 hover:underline">Lupa password?</a>
                    </div>

                    <!-- Login Button -->
                    <button class="w-full py-3 bg-green-600 text-white rounded-lg font-semibold hover:bg-green-700 transition">
                        Masuk
                    </button>

                    <!-- Register Link -->
                    <p class="text-center text-sm">
                        Belum punya akun?
                        <a href="{{ url('/register') }}" class="text-green-700 font-semibold hover:underline">Daftar Sekarang</a>
                    </p>

                </form>

            </div>

            <!-- ================= RIGHT PANEL ================= -->
            <div class="relative bg-books hidden md:flex">

                <div class="absolute inset-0 bg-gradient-to-br from-green-900/60 to-green-700/40"></div>

                <div class="relative text-white p-10 flex flex-col justify-center h-full space-y-6">

                    <a href="{{ url('/home-pengunjung') }}" class="absolute top-4 right-4 underline text-sm">
                        Kembali ke Home
                    </a>

                    <h2 class="text-3xl font-bold leading-snug max-w-sm">
                        Akses Ribuan Koleksi Buku Digital
                    </h2>

                    <p class="text-gray-200 text-sm max-w-sm">
                        Login untuk meminjam buku, melihat riwayat peminjaman, 
                        dan mengakses fitur perpustakaan digital kami.
                    </p>

                    <ul class="space-y-4">

                        <div>
                            <p class="font-semibold text-white text-lg">12,500+ Koleksi Buku</p>
                            <p class="text-gray-200 text-sm">Berbagai kategori tersedia</p>
                        </div>

                        <div>
                            <p class="font-semibold text-white text-lg">Peminjaman Mudah</p>
                            <p class="text-gray-200 text-sm">Proses cepat dan praktis</p>
                        </div>

                    </ul>

                </div>
            </div>

        </div>

    </div>

    <!-- SCRIPT: Show / Hide Password -->
    <script>
        function togglePassword() {
            const field = document.getElementById("passwordField");
            const show = document.getElementById("eyeIconShow");
            const hide = document.getElementById("eyeIconHide");

            if (field.type === "password") {
                field.type = "text";
                show.classList.add("hidden");
                hide.classList.remove("hidden");
            } else {
                field.type = "password";
                hide.classList.add("hidden");
                show.classList.remove("hidden");
            }
        }
    </script>

</body>
</html>
