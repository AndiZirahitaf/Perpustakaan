<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - BookTech</title>
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

        <!-- Right nav -->
        <div class="flex items-center gap-8">
            <nav class="hidden md:flex items-center gap-6 text-sm text-gray-600">
                <a href="{{ url('/home-pengunjung') }}" class="hover:text-green-600">Home</a>
                <a href="{{ url('/katalog') }}" class="hover:text-green-600">Katalog</a>
                <a href="{{ url('/pengumuman') }}" class="hover:text-green-600">Pengumuman</a>
                <a href="{{ url('/agenda') }}" class="hover:text-green-600">Agenda</a>

                <div class="relative">
                    <button id="dropdownBtn" class="flex items-center gap-1 hover:text-green-600">
                        Lainnya
                        <svg id="dropdownIcon" class="w-4 h-4 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div id="dropdownMenu"
                         class="absolute right-0 mt-2 w-40 bg-white shadow-lg border rounded-lg py-2 text-sm hidden">
                        <a href="{{ url('/register') }}" class="block px-4 py-2 hover:bg-gray-100">Pendaftaran</a>
                        <a href="{{ url('/faq') }}" class="block px-4 py-2 hover:bg-gray-100">FAQ</a>
                        <a href="{{ url('/contact') }}" class="block px-4 py-2 hover:bg-gray-100">Kontak</a>
                    </div>
                </div>
            </nav>

            <a href="{{ url('/login') }}"
               class="hidden md:inline-block px-5 py-2 rounded-lg bg-green-600 text-white text-sm hover:bg-green-700">
                Login
            </a>

            <button id="menuBtn" class="md:hidden text-gray-700 text-2xl">☰</button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden bg-white border-t md:hidden">
        <nav class="flex flex-col p-4 text-sm space-y-3">
            <a href="{{ url('/home-pengunjung') }}">Home</a>
            <a href="{{ url('/katalog') }}">Katalog</a>
            <a href="{{ url('/pengumuman') }}">Pengumuman</a>
            <a href="{{ url('/agenda') }}">Agenda</a>

            <div class="border-t pt-3">
                <button id="mobileDropdownBtn"
                        class="flex justify-between w-full text-left py-2">
                    Lainnya
                    <svg id="mobileDropdownIcon" class="w-4 h-4 transition" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"/>
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

<script>
    menuBtn.onclick = () => mobileMenu.classList.toggle("hidden");

    dropdownBtn.onclick = () => {
        dropdownMenu.classList.toggle("hidden");
        dropdownIcon.classList.toggle("rotate-180");
    };

    document.addEventListener("click", e => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add("hidden");
            dropdownIcon.classList.remove("rotate-180");
        }
    });

    mobileDropdownBtn.onclick = () => {
        mobileDropdownMenu.classList.toggle("hidden");
        mobileDropdownIcon.classList.toggle("rotate-180");
    };
</script>

<!-- SPACER -->
<div class="h-20"></div>

<!-- ================= HERO ================= -->
<section class="bg-green-600 text-center py-16 px-4">
    <div class="max-w-3xl mx-auto text-white">
        <div class="flex justify-center mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 
                0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>

        <h2 class="text-3xl font-bold mb-3">Agenda Kegiatan</h2>
        <p class="text-white/90 text-sm">Ikuti berbagai kegiatan menarik di perpustakaan</p>
    </div>
</section>

<!-- ================= MAIN CONTENT ================= -->
<section class="py-14">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 lg:grid-cols-4 gap-8">

        <!-- SIDEBAR -->
        <aside class="bg-white rounded-2xl shadow p-5 h-fit">
            <h3 class="font-semibold text-sm mb-3">Kategori Event</h3>

            <ul class="space-y-3 text-sm text-gray-600">
                <li><input type="radio" checked> Semua</li>
                <li><input type="radio"> Diskusi Buku</li>
                <li><input type="radio"> Workshop</li>
                <li><input type="radio"> Pelatihan</li>
                <li><input type="radio"> Pameran</li>
                <li><input type="radio"> Anak</li>
            </ul>
        </aside>

        <!-- EVENT LIST -->
        <div class="lg:col-span-3 space-y-10">

            <!-- SECTION 1 -->
            {{-- <h3 class="font-semibold text-gray-700 mb-3">Segera Dimulai</h3> --}}

            <div class="space-y-5">

                <!-- EVENT 1 -->
                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>25</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full">Diskusi Buku</span>

                        <h4 class="text-lg font-semibold mt-2">Diskusi Buku: "Thinking, Fast and Slow"</h4>

                        <div class="text-xs text-gray-500 space-y-1 mt-1">
                            <p>🕒 14:00 - 16:00 · Ruang Diskusi Lt. 2</p>
                            <p>👥 25 / 30 peserta</p>
                        </div>

                        <p class="text-sm text-gray-600 mt-3">
                            Bedah buku karya Daniel Kahneman tentang psikologi pengambilan keputusan.
                        </p>
                    </div>
                </div>

                {{-- <!-- EVENT 2 -->
                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>26</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs rounded-full">Workshop</span>
                        <h4 class="text-lg font-semibold mt-2">Workshop: Penulisan Ilmiah</h4>

                        <div class="text-xs text-gray-500 space-y-1 mt-1">
                            <p>🕒 09:00 - 12:00 · Auditorium Utama</p>
                            <p>👥 45 / 50 peserta</p>
                        </div>

                        <p class="text-sm text-gray-600 mt-3">
                            Pelatihan teknik penulisan karya ilmiah untuk mahasiswa dan peneliti.
                        </p>
                    </div>
                </div> --}}

                <!-- EVENT 3 -->
                {{-- <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>27</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full">Anak</span>
                        <h4 class="text-lg font-semibold mt-2">Storytelling untuk Anak</h4>

                        <div class="text-xs text-gray-500 mt-1 space-y-1">
                            <p>🕒 10:00 - 11:30 · Ruang Anak</p>
                            <p>👥 12 / 20 peserta</p>
                        </div>

                        <p class="text-sm text-gray-600 mt-3">
                            Sesi dongeng interaktif untuk anak usia 5–10 tahun.
                        </p>
                    </div>
                </div> --}}

            </div>

            <!-- SECTION 2 -->
            {{-- <h3 class="font-semibold text-gray-700 mt-10">Minggu Ini</h3>

            <div class="space-y-5">
                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>28</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full">Pelatihan</span>
                        <h4 class="text-lg font-semibold mt-2">Pelatihan Riset & Publikasi</h4>

                        <p class="text-xs text-gray-500 mt-1">🕒 13:00 - 16:00 · Lab Komputer Lt. 3</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>30</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full">Pameran</span>
                        <h4 class="text-lg font-semibold mt-2">Pameran Buku Baru</h4>

                        <p class="text-xs text-gray-500 mt-1">🕒 08:00 - 17:00 · Lobby Utama</p>
                    </div>
                </div>
            </div> --}}

            <!-- SECTION 3 -->
            {{-- <h3 class="font-semibold text-gray-700 mt-10">Bulan Depan</h3>

            <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                    <span>02</span>
                    <span class="text-xs">Des</span>
                </div>

                <div class="flex-1">
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full">Diskusi Buku</span>
                    <h4 class="text-lg font-semibold mt-2">Bedah Buku: Sastra Indonesia</h4>

                    <p class="text-xs text-gray-500 mt-1">🕒 15:00 - 17:00 · Ruang Seminar</p>
                </div>
            </div> --}}

        </div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-gray-300 pt-10 pb-6">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-6">

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
                <li><a href="{{ url('/register') }}" class="hover:text-white">Pendaftaran Anggota</a></li>
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

    <div class="border-t border-gray-800 pt-4 text-xs text-gray-500 text-center">
        © 2024 Perpustakaan Digital. All rights reserved.
    </div>
</footer>

</body>
</html>
