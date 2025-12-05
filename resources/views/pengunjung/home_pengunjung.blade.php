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

                <!-- Dropdown -->
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

            <!-- Login -->
            <a href="{{ url('/login') }}"
               class="hidden md:inline-block px-5 py-2 rounded-lg bg-green-600 text-white text-sm font-semibold hover:bg-green-700">
                Login
            </a>

            <!-- Mobile button -->
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

            <!-- Dropdown MOBILE -->
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

<!-- ================= JS DROPDOWN ================= -->
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

<div class="h-20"></div>

<!-- ================= HERO SECTION ================= -->
<section id="hero" class="bg-green-600">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-12 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center text-center lg:text-left">

        <!-- Left text -->
        <div>
            <p class="text-white/80 text-sm mb-2">Perpustakaan Digital</p>

            <h2 class="text-3xl md:text-4xl font-bold text-white leading-snug">
                Temukan Pengetahuan di Perpustakaan
            </h2>

            <p class="mt-4 text-white/90 text-sm md:text-base max-w-xl mx-auto lg:mx-0">
                Akses ribuan buku, sumber digital, dan program komunitas. Gerbang
                Anda menuju pembelajaran dimulai di sini.
            </p>

            <div class="mt-6 flex flex-wrap gap-4 justify-center lg:justify-start">
                <a href="#katalog"
                   class="px-6 py-3 bg-white text-green-700 rounded-lg text-sm font-semibold shadow hover:bg-gray-100">
                    Jelajahi Buku
                </a>
                <a href="{{ url('/register') }}"
                   class="px-6 py-3 bg-green-800 text-white rounded-lg text-sm font-semibold shadow hover:bg-green-900">
                    Daftar Anggota
                </a>
            </div>
        </div>

        <!-- Right image -->
        <div class="flex justify-center lg:justify-end">
            <div class="bg-white/10 rounded-3xl p-2 shadow-2xl w-full max-w-xs sm:max-w-sm md:max-w-md">
                <img src="{{ asset('assets/img/hero.jpg') }}"
                     alt="Rak Buku"
                     class="w-full h-56 sm:h-64 md:h-72 lg:h-80 object-cover rounded-2xl">
            </div>
        </div>
    </div>
</section>

<!-- ================= STATS ================= -->
<section class="bg-white">
    <div class="max-w-6xl mx-auto px-4 lg:px-8 py-10 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

        <div class="flex flex-col items-center">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-2">
                <img src="{{ asset('assets/img/buku.png') }}" class="w-6 h-6 opacity-70">
            </div>
            <p class="text-2xl font-bold text-green-700">50.000+</p>
            <p class="text-xs md:text-sm text-gray-500 mt-1">Koleksi Buku</p>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-2">
                <img src="{{ asset('assets/img/people.png') }}" class="w-6 h-6 opacity-70">
            </div>
            <p class="text-2xl font-bold text-green-700">12.000+</p>
            <p class="text-xs md:text-sm text-gray-500 mt-1">Anggota Aktif</p>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-2">
                <img src="{{ asset('assets/img/calendar.png') }}" class="w-6 h-6 opacity-70">
            </div>
            <p class="text-2xl font-bold text-green-700">200+</p>
            <p class="text-xs md:text-sm text-gray-500 mt-1">Acara Per Tahun</p>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-2">
                <img src="{{ asset('assets/img/jam.png') }}" class="w-6 h-6 opacity-70">
            </div>
            <p class="text-2xl font-bold text-green-700">24/7</p>
            <p class="text-xs md:text-sm text-gray-500 mt-1">Akses Digital</p>
        </div>

    </div>
</section>

<!-- ================= BERITA ================= -->
<section id="berita" class="bg-gray-50 py-14">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-gray-800">Berita & Informasi Terkini</h3>
            <p class="text-sm text-gray-500 mt-2">Informasi terbaru untuk Anda</p>
        </div>

        @php 
        $berita = [
            [
                "gambar" => "perpus1.jpg",
                "tanggal" => "10 Des 2024",
                "judul" => "Pembukaan Ruang Baca Baru",
                "desc" => "Perpustakaan kini memiliki ruang baca modern untuk kenyamanan belajar Anda."
            ],
            [
                "gambar" => "perpus2.jpg",
                "tanggal" => "12 Des 2024",
                "judul" => "Donasi Buku Akhir Tahun",
                "desc" => "Ratusan buku baru didonasikan dan siap untuk diakses oleh semua anggota."
            ],
            [
                "gambar" => "perpus3.jpg",
                "tanggal" => "14 Des 2024",
                "judul" => "Workshop Menulis Kreatif",
                "desc" => "Ikuti pelatihan menulis bersama penulis profesional di aula utama."
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($berita as $b)
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-md transition overflow-hidden">
                    <img src="{{ asset('assets/img/'.$b['gambar']) }}" class="h-40 w-full object-cover">
                    <div class="p-5">
                        <p class="text-xs text-gray-400 mb-1">{{ $b['tanggal'] }}</p>
                        <h4 class="font-semibold text-sm mb-2">{{ $b['judul'] }}</h4>
                        <p class="text-xs text-gray-500 mb-3">{{ $b['desc'] }}</p>
                        <a href="#" class="text-xs font-semibold text-green-700">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>

<!-- ================= BUKU PILIHAN ================= -->
<section id="katalog" class="bg-white py-14">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center mb-8">
            <h3 class="text-2xl font-bold">Buku Pilihan</h3>
            <p class="text-sm text-gray-500 mt-2">Pilih buku terbaik untuk Anda</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 md:gap-6">
            @for ($i = 0; $i < 4; $i++)
                <div class="bg-gray-100 rounded-xl p-3">
                    <img src="{{ asset('assets/img/book1.jpg') }}" class="w-full h-36 sm:h-40 md:h-48 object-cover rounded-lg mb-2">
                    <h4 class="text-sm font-semibold truncate">Judul Buku</h4>
                    <p class="text-xs text-gray-500 mb-2">Penulis</p>
                    <span class="text-[10px] bg-gray-200 px-2 py-1 rounded-full">Kategori</span>
                </div>
            @endfor
        </div>

        <div class="mt-8 text-center">
            <a href="{{ url('/katalog') }}" class="px-6 py-2 bg-green-600 text-white rounded-lg text-sm font-semibold hover:bg-green-700">
                Lihat Semua Buku
            </a>
        </div>
    </div>
</section>

<!-- ================= AGENDA ================= -->
<section id="agenda" class="bg-gray-50 py-14">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center mb-8">
            <h3 class="text-2xl font-bold">Agenda Mendatang</h3>
            <p class="text-sm text-gray-500">Ikuti acara menarik kami</p>
        </div>

        <div class="space-y-4 max-w-md mx-auto">

            <div class="bg-white rounded-2xl shadow-sm p-4 flex items-center gap-4">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex flex-col items-center justify-center text-xs font-semibold text-green-700">
                    <span>22</span><span>Nov</span>
                </div>
                <div>
                    <h4 class="text-sm font-semibold">Jumpa Penulis</h4>
                    <p class="text-xs text-gray-500">Aula Utama - 14:00 WIB</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-4 flex items-center gap-4">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex flex-col items-center justify-center text-xs font-semibold text-green-700">
                    <span>25</span><span>Nov</span>
                </div>
                <div>
                    <h4 class="text-sm font-semibold">Workshop Literasi</h4>
                    <p class="text-xs text-gray-500">Lab Komputer - 10:00 WIB</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= LAYANAN ================= -->
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <h3 class="text-2xl font-bold text-center">Layanan Perpustakaan</h3>
        <p class="text-sm text-gray-500 text-center mt-2">
            Jelajahi berbagai layanan yang kami tawarkan untuk komunitas
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">

            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto">
                    <img src="{{ asset('assets/img/cari.png') }}" class="w-6 h-6 opacity-70">
                </div>
                <h4 class="text-center text-lg font-semibold mt-4">Pusat Penelitian</h4>
                <p class="text-center text-sm text-gray-500 mt-2">
                    Akses materi penelitian komprehensif, database, dan bantuan pustakawan ahli untuk proyek Anda.
                </p>
                <p class="text-center text-green-700 text-sm font-semibold mt-3 cursor-pointer">
                    Pelajari Lebih Lanjut
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto">
                    <img src="{{ asset('assets/img/wifi.png') }}" class="w-6 h-6 opacity-70">
                </div>
                <h4 class="text-center text-lg font-semibold mt-4">WiFi Gratis</h4>
                <p class="text-center text-sm text-gray-500 mt-2">
                    Akses internet berkecepatan tinggi di seluruh perpustakaan. Tetap terhubung saat Anda belajar atau bekerja.
                </p>
                <p class="text-center text-green-700 text-sm font-semibold mt-3 cursor-pointer">
                    Pelajari Lebih Lanjut
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto">
                    <img src="{{ asset('assets/img/educ.png') }}" class="w-6 h-6 opacity-70">
                </div>
                <h4 class="text-center text-lg font-semibold mt-4">Ruang Belajar</h4>
                <p class="text-center text-sm text-gray-500 mt-2">
                    Pesan ruang belajar pribadi dan ruang kolaboratif yang dilengkapi fasilitas modern.
                </p>
                <p class="text-center text-green-700 text-sm font-semibold mt-3 cursor-pointer">
                    Pelajari Lebih Lanjut
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ================= AJAKAN BERGABUNG ================= -->
<section class="py-16 bg-gradient-to-r from-green-700 to-green-600 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">

        <h3 class="text-2xl font-bold">Siap Bergabung dengan Komunitas Perpustakaan Kami?</h3>
        <p class="text-sm text-green-100 mt-3 leading-relaxed">
            Nikmati akses tak terbatas ke buku dan keuntungan eksklusif anggota. 
            Bergabunglah dengan kami dan mulai perjalanan belajar Anda hari ini!
        </p>

        <div class="mt-8 flex justify-center gap-4 flex-wrap">
            <a href="{{ url('/register') }}"
               class="px-6 py-3 bg-white text-green-700 rounded-lg text-sm font-semibold shadow hover:bg-gray-100">
                Daftar Sekarang
            </a>
            <a href="{{ url('/contact') }}"
               class="px-6 py-3 border border-white text-white rounded-lg text-sm font-semibold hover:bg-white hover:text-green-700 transition">
                Hubungi Kami
            </a>
        </div>

    </div>
</section>

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
                <li><a href="#katalog" class="hover:text-white">Katalog Buku</a></li>
                <li><a href="#agenda" class="hover:text-white">Agenda</a></li>
                <li><a href="#berita" class="hover:text-white">Pengumuman</a></li>
                <li><a href="{{ url('/register') }}" class="hover:text-white">Daftar Anggota</a></li>
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
