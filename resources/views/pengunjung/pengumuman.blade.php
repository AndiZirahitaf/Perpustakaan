<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital - BookTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- ================= HEADER ================= -->
<header class="bg-white shadow-sm fixed inset-x-0 top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-4 flex items-center justify-between">

        <!-- Brand -->
        <div class="flex items-center gap-2">
            <img src="{{ asset('assets/img/logoperpus.png') }}" class="w-10 h-10 object-contain">
            <div>
                <h1 class="text-lg font-bold text-green-700 leading-tight">BookTech</h1>
                <p class="text-xs text-gray-500 -mt-1">Perpustakaan Digital</p>
            </div>
        </div>

        <!-- Right side: Nav + Login + Mobile button -->
        <div class="flex items-center gap-8">

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-6 text-sm text-gray-600">
                <a href="{{ url('/home-pengunjung') }}" class="hover:text-green-600">Home</a>
                <a href="{{ url('/katalog') }}" class="hover:text-green-600">Katalog</a>
                <a href="{{ url('/pengumuman') }}" class="hover:text-green-600">Pengumuman</a>
                <a href="{{ url('/agenda') }}" class="hover:text-green-600">Agenda</a>

                <!-- Lainnya Dropdown -->
                <div class="relative">
                    <button id="dropdownBtn" class="flex items-center gap-1 hover:text-green-600">
                        Lainnya
                        <svg id="dropdownIcon" xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4 transition duration-300" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="dropdownMenu"
                        class="absolute right-0 mt-2 w-40 bg-white shadow-lg border rounded-lg py-2 text-sm hidden z-50">
                        <a href="{{ url('/register') }}" class="block px-4 py-2 hover:bg-gray-100">Pendaftaran</a>
                        <a href="{{ url('/faq') }}" class="block px-4 py-2 hover:bg-gray-100">FAQ</a>
                        <a href="{{ url('/contact') }}" class="block px-4 py-2 hover:bg-gray-100">Kontak</a>
                    </div>
                </div>
            </nav>

            <!-- Login (desktop) -->
            <a href="{{ url('/login') }}"
               class="hidden md:inline-block px-5 py-2 rounded-lg bg-green-600 text-white text-sm font-semibold hover:bg-green-700">
                Login
            </a>

            <!-- Mobile menu button -->
            <button id="menuBtn" class="md:hidden text-gray-700 text-2xl">
                ☰
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden bg-white border-t border-gray-200 md:hidden">
        <nav class="flex flex-col p-4 text-sm text-gray-700 space-y-3">

            <a href="{{ url('/home-pengunjung') }}">Home</a>
            <a href="{{ url('/katalog') }}">Katalog</a>
            <a href="{{ url('/pengumuman') }}">Pengumuman</a>
            <a href="{{ url('/agenda') }}">Agenda</a>

            <div class="border-t pt-3">
                <button id="mobileDropdownBtn"
                        class="flex justify-between w-full text-left py-2">
                    Lainnya
                    <svg id="mobileDropdownIcon" xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 transition duration-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="mobileDropdownMenu" class="hidden pl-4 space-y-2">
                    <a href="{{ url('/register') }}" class="block py-1">Pendaftaran</a>
                    <a href="{{ url('/faq') }}" class="block py-1">FAQ</a>
                    <a href="{{ url('/contact') }}" class="block py-1">Kontak</a>
                </div>
            </div>

            <a href="{{ url('/login') }}" class="text-green-700 font-semibold mt-2">Login</a>
        </nav>
    </div>
</header>

<!-- JS DROPDOWN -->
<script>
    document.getElementById("menuBtn").onclick = () => {
        document.getElementById("mobileMenu").classList.toggle("hidden");
    };

    const dropdownBtn = document.getElementById("dropdownBtn");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const dropdownIcon = document.getElementById("dropdownIcon");

    dropdownBtn.onclick = () => {
        dropdownMenu.classList.toggle("hidden");
        dropdownIcon.classList.toggle("rotate-180");
    };

    document.addEventListener("click", (e) => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add("hidden");
            dropdownIcon.classList.remove("rotate-180");
        }
    });

    const mobileBtn = document.getElementById("mobileDropdownBtn");
    const mobileMenu = document.getElementById("mobileDropdownMenu");
    const mobileIcon = document.getElementById("mobileDropdownIcon");

    mobileBtn.onclick = () => {
        mobileMenu.classList.toggle("hidden");
        mobileIcon.classList.toggle("rotate-180");
    };
</script>

<!-- ================= SPACER ================= -->
<div class="h-20"></div>

<!-- ================= HERO ================= -->
<section class="bg-green-600 text-center py-16 px-4">
    <div class="max-w-3xl mx-auto text-white">

        <div class="flex justify-center mb-4">
            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M3 11v2a1 1 0 001 1h1l4 4v-16l-4 4H4a1 1 0 00-1 1z" />
                <path d="M15 8v8a5 5 0 000-8z"/>
            </svg>
        </div>

        <h2 class="text-3xl font-bold mb-3">Berita & Pengumuman</h2>
        <p class="text-white/90 text-sm">
            Tetap update dengan berita terbaru dari perpustakaan kami
        </p>
    </div>
</section>

<!-- ================= LIST PENGUMUMAN ================= -->
<section class="py-14">
    <div class="max-w-6xl mx-auto px-4 lg:px-8 space-y-8">

        <!-- CARD 1 -->
        <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex flex-col md:flex-row gap-4">
            <img src="{{ asset('assets/img/perpus1.jpg') }}" class="w-full md:w-56 h-40 object-cover rounded-xl">
            <div class="flex-1">

                <div class="flex items-center gap-3 text-xs text-gray-500 mb-1">
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs">Fasilitas</span>
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 
                            0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        15 Desember 2024
                    </span>
                </div>

                <h3 class="text-lg font-semibold mb-1">Pembukaan Gedung Baru Desember 2024</h3>

                <p class="text-sm text-gray-600 mb-3">
                    Gedung baru akan dibuka dengan fasilitas modern dan ruang belajar nyaman untuk pengunjung.
                </p>

                <a href="#" class="text-sm font-semibold text-green-700 hover:underline">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex flex-col md:flex-row gap-4">
            <img src="{{ asset('assets/img/perpus2.jpg') }}" class="w-full md:w-56 h-40 object-cover rounded-xl">
            <div class="flex-1">

                <div class="flex items-center gap-3 text-xs text-gray-500 mb-1">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs">Program</span>
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 
                            0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        1 Desember 2024
                    </span>
                </div>

                <h3 class="text-lg font-semibold mb-1">Program Membaca Liburan 2024</h3>

                <p class="text-sm text-gray-600 mb-3">
                    Ikuti program membaca liburan dan temukan rekomendasi buku terbaik untuk musim ini.
                </p>

                <a href="#" class="text-sm font-semibold text-green-700 hover:underline">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex flex-col md:flex-row gap-4">
            <img src="{{ asset('assets/img/perpus3.jpg') }}" class="w-full md:w-56 h-40 object-cover rounded-xl">
            <div class="flex-1">

                <div class="flex items-center gap-3 text-xs text-gray-500 mb-1">
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs">Koleksi</span>
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 
                            0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        28 November 2024
                    </span>
                </div>

                <h3 class="text-lg font-semibold mb-1">Koleksi Digital Diperluas</h3>

                <p class="text-sm text-gray-600 mb-3">
                    Koleksi e-book dan audiobook baru telah ditambahkan untuk memenuhi kebutuhan pembaca digital.
                </p>

                <a href="#" class="text-sm font-semibold text-green-700 hover:underline">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>

    </div>
</section>

<!-- ================= PAGINATION ================= -->
<div class="flex justify-center items-center gap-2 my-10">
    <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">‹</button>
    <button class="w-8 h-8 rounded-lg bg-green-600 text-white text-sm">1</button>
    <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">2</button>
    <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">3</button>
    <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">›</button>
</div>

<!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-gray-300 pt-10 pb-6">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-6">

        <div>
            <h4 class="font-semibold text-sm">Perpustakaan Digital</h4>
            <p class="text-xs text-gray-400 mt-3">Akses ribuan buku digital.</p>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Tautan Cepat</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="{{ url('/home-pengunjung') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ url('/agenda') }}" class="hover:text-white">Agenda</a></li>
                <li><a href="{{ url('/pengumuman') }}" class="hover:text-white">Pengumuman</a></li>
                <li><a href="{{ url('/register') }}" class="hover:text-white">Pendaftaran</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Informasi</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="{{ url('/faq') }}" class="hover:text-white">FAQ</a></li>
                <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Kontak</h4>
            <p class="text-xs text-gray-400">
                Jl. Pendidikan No. 123<br>
                Jakarta Selatan, 12345
            </p>
            <p class="text-xs text-gray-400 mt-2">info@perpustakaan.id</p>
        </div>

    </div>

    <div class="border-t border-gray-800 pt-4">
        <div class="max-w-7xl mx-auto px-4 lg:px-8 flex flex-col md:flex-row justify-between text-xs text-gray-500">
            <p>© 2024 Perpustakaan Digital. All rights reserved.</p>

            <div class="flex gap-4 mt-2 md:mt-0">
                <a href="#" class="hover:text-white">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
