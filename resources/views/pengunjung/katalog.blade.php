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

        <div class="flex items-center gap-8">

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-6 text-sm text-gray-600">
                <a href="{{ url('/home-pengunjung') }}" class="hover:text-green-600">Home</a>
                <a href="{{ url('/katalog') }}" class="hover:text-green-600">Katalog</a>
                <a href="{{ url('/pengumuman') }}" class="hover:text-green-600">Pengumuman</a>
                <a href="{{ url('/agenda') }}" class="hover:text-green-600">Agenda</a>

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

            <a href="{{ url('/login') }}"
               class="hidden md:inline-block px-5 py-2 rounded-lg bg-green-600 text-white text-sm font-semibold hover:bg-green-700">
                Login
            </a>

            <button id="menuBtn" class="md:hidden text-gray-700 text-2xl">☰</button>
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
                <button id="mobileDropdownBtn" class="flex justify-between w-full text-left py-2">
                    Lainnya
                    <svg id="mobileDropdownIcon" class="w-4 h-4 transition duration-300" fill="none"
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

<script>
    document.getElementById("menuBtn").onclick = () =>
        document.getElementById("mobileMenu").classList.toggle("hidden");

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

    document.getElementById("mobileDropdownBtn").onclick = () => {
        document.getElementById("mobileDropdownMenu").classList.toggle("hidden");
        document.getElementById("mobileDropdownIcon").classList.toggle("rotate-180");
    };
</script>

<!-- SPACER -->
<div class="h-20"></div>

<!-- HERO -->
<section class="bg-green-600 text-center py-16 px-4">
    <div class="max-w-4xl mx-auto text-white">
        <h2 class="text-3xl font-bold mb-3">Katalog Buku</h2>
        <p class="text-white/90 text-sm">
            Jelajahi koleksi buku kami yang luas di berbagai genre dan subjek
        </p>
    </div>
</section>

<!-- SEARCH & FILTER -->
<section class="py-10">
    <div class="max-w-6xl mx-auto px-4 lg:px-8">

        <div class="bg-white shadow rounded-xl p-4 flex flex-col md:flex-row items-center gap-4">
            <input type="text" class="w-full border rounded-lg px-4 py-3 text-sm 
                   focus:ring-2 focus:ring-green-500 outline-none"
                   placeholder="Cari buku berdasarkan judul, penulis, atau ISBN...">

            <button class="px-6 py-3 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm font-semibold">
                Filter
            </button>
        </div>

        <!-- Categories -->
        <div class="flex flex-wrap gap-3 mt-6">
            <button class="px-5 py-2 text-sm bg-green-600 text-white rounded-full">Semua Buku</button>
            <button class="px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full">Fiksi</button>
            <button class="px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full">Pengembangan Diri</button>
            <button class="px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full">Keuangan</button>
            <button class="px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full">Sejarah</button>
            <button class="px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full">Produktivitas</button>
            <button class="px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full">Psikologi</button>
        </div>

    </div>
</section>

<!-- BOOK LIST -->
<section class="pb-14">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <h3 class="font-semibold text-gray-700 mb-4">Buku Tersedia</h3>
    <p class="text-sm text-gray-500 mb-6">
        Menampilkan {{ $buku->count() }} buku
    </p>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">

    @foreach ($buku as $item)
        <a href="#"
        class="bg-white rounded-xl shadow hover:shadow-md transition p-3 flex flex-col">

            <div class="rounded-xl overflow-hidden">
                <img src="{{ asset('assets/img/book1.jpg') }}"
                    class="w-full h-40 object-cover">
            </div>

            @if ($item->status_ketersediaan === 'Tersedia')
                <span class="mt-3 inline-block text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">
                    Tersedia
                </span>
            @else
                <span class="mt-3 inline-block text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full">
                    Dipinjam
                </span>
            @endif

            <h4 class="font-semibold text-sm mt-2">{{ $item->judul }}</h4>
            <p class="text-xs text-gray-500">{{ $item->penulis }}</p>
            <p class="text-xs text-gray-400">{{ $item->tahun_terbit }}</p>

            <span class="mt-2 text-[10px] bg-gray-100 px-2 py-1 rounded-full text-gray-600">
                {{ $item->penerbit }}
            </span>

        </a>
    @endforeach

    </div>


        <div class="flex justify-center items-center gap-2 mt-10">
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">‹</button>
            <button class="w-8 h-8 rounded-lg bg-green-600 text-white text-sm">1</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">2</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">3</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">›</button>
        </div>

    </div>
</section>

<!-- FOOTER -->
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
</footer>

</body>
</html>
