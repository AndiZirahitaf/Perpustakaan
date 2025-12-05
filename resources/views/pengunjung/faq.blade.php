<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - BookTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- ================= HEADER ================= -->
<header class="bg-white shadow-sm fixed inset-x-0 top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-4 flex items-center justify-between">

        <div class="flex items-center gap-2">
            <img src="{{ asset('assets/img/logoperpus.png') }}" class="w-10 h-10 object-contain">
            <div>
                <h1 class="text-lg font-bold text-green-700 leading-tight">BookTech</h1>
                <p class="text-xs text-gray-500 -mt-1">Perpustakaan Digital</p>
            </div>
        </div>

        <div class="flex items-center gap-8">
            <nav class="hidden md:flex items-center gap-6 text-sm text-gray-600">
                <a href="{{ url('/home-pengunjung') }}" class="hover:text-green-600">Home</a>
                <a href="{{ url('/katalog') }}" class="hover:text-green-600">Katalog</a>
                <a href="{{ url('/pengumuman') }}" class="hover:text-green-600">Pengumuman</a>
                <a href="{{ url('/agenda') }}" class="hover:text-green-600">Agenda</a>

                <div class="relative">
                    <button id="dropdownBtn" class="flex items-center gap-1 hover:text-green-600">
                        Lainnya
                        <svg id="dropdownIcon" class="w-4 h-4 transition duration-300"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
               class="hidden md:inline-block px-5 py-2 bg-green-600 text-white rounded-lg text-sm font-semibold hover:bg-green-700">
                Login
            </a>

            <button id="menuBtn" class="md:hidden text-gray-700 text-2xl">
                ☰
            </button>
        </div>

    </div>

    <!-- MOBILE -->
    <div id="mobileMenu" class="hidden bg-white border-t md:hidden">
        <nav class="flex flex-col p-4 text-sm text-gray-700 space-y-3">

            <a href="{{ url('/home-pengunjung') }}">Home</a>
            <a href="{{ url('/katalog') }}">Katalog</a>
            <a href="{{ url('/pengumuman') }}">Pengumuman</a>
            <a href="{{ url('/agenda') }}">Agenda</a>

            <div class="border-t pt-3">
                <button id="mobileDropdownBtn"
                        class="flex justify-between w-full text-left py-2">
                    Lainnya
                    <svg id="mobileDropdownIcon" class="w-4 h-4 transition-transform" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
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
    document.getElementById("menuBtn").onclick = () =>
        document.getElementById("mobileMenu").classList.toggle("hidden");

    const dropdownBtn = document.getElementById("dropdownBtn");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const dropdownIcon = document.getElementById("dropdownIcon");

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

    document.getElementById("mobileDropdownBtn").onclick = () => {
        document.getElementById("mobileDropdownMenu").classList.toggle("hidden");
        document.getElementById("mobileDropdownIcon").classList.toggle("rotate-180");
    };
</script>

<!-- SPACER -->
<div class="h-20"></div>

<!-- =============== HERO =============== -->
<section class="bg-gradient-to-b from-green-700 to-green-600 text-center py-16 px-4">
    <div class="max-w-3xl mx-auto text-white">
        <div class="w-14 h-14 rounded-full border border-white/40 flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 10a4 4 0 118 0c0 1.657-1.333 2.5-2.5 3.25C12.5 14 12 15 12 16m.01 3h-.02"/>
            </svg>
        </div>
        <h2 class="text-3xl font-bold mb-2">Pertanyaan yang Sering Diajukan</h2>
        <p class="text-sm text-green-100">
            Temukan jawaban untuk pertanyaan umum tentang layanan dan kebijakan perpustakaan kami
        </p>
    </div>
</section>

<!-- SEARCH -->
<section class="bg-white py-6 border-b">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-gray-50 border rounded-full px-4 py-3 flex items-center gap-3 max-w-xl mx-auto">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
            </svg>
            <input class="w-full bg-transparent text-sm outline-none" type="text" placeholder="Cari jawaban...">
        </div>
    </div>
</section>

<!-- FAQ CONTENT -->
<section class="py-10 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- SIDEBAR -->
        <aside class="bg-white rounded-2xl shadow-sm p-4 text-sm">

            <p class="text-xs font-semibold text-gray-500 mb-3">Kategori</p>

            <div class="space-y-2">

                <button class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left
                       hover:bg-gray-50 border border-transparent text-gray-600"
                        data-category="keanggotaan">
                    <span class="category-badge w-6 h-6 rounded-full border flex items-center justify-center text-[10px]">1</span>
                    <span>Keanggotaan</span>
                </button>

                <button class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left
                       hover:bg-gray-50 border border-transparent text-gray-600"
                        data-category="peminjaman">
                    <span class="category-badge w-6 h-6 rounded-full border flex items-center justify-center text-[10px]">2</span>
                    <span>Peminjaman</span>
                </button>

                <button class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left
                       bg-green-50 text-green-700 border border-green-500"
                        data-category="denda">
                    <span class="category-badge w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center text-[10px]">3</span>
                    <span>Denda & Biaya</span>
                </button>

                <button class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left
                        hover:bg-gray-50 border border-transparent text-gray-600"
                        data-category="jam">
                    <span class="category-badge w-6 h-6 rounded-full border flex items-center justify-center text-[10px]">4</span>
                    <span>Jam & Akses</span>
                </button>

            </div>
        </aside>

        <!-- ============= SECTION: KEANGGOTAAN ============= -->
        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6 hidden"
             data-category-section="keanggotaan">

            <div class="mb-5">
                <h3 class="font-semibold text-base text-gray-800">Keanggotaan</h3>
                <p class="text-xs text-gray-500">Pertanyaan umum tentang pendaftaran dan status anggota</p>
            </div>

            <div class="space-y-3 text-sm">

                @php
                    $faq_keanggotaan = [
                        ['id' => 'k1', 'q' => 'Bagaimana cara mendaftar menjadi anggota?', 
                        'a' => 'Anda dapat mendaftar secara online melalui halaman Pendaftaran Anggota atau datang langsung ke perpustakaan.'],

                        ['id' => 'k2', 'q' => 'Apa saja persyaratan menjadi anggota?', 
                        'a' => 'Persyaratan umum meliputi kartu identitas, email aktif, dan formulir pendaftaran.'],

                        ['id' => 'k3', 'q' => 'Berapa lama masa berlaku kartu anggota?', 
                        'a' => 'Masa berlaku kartu anggota adalah 1 tahun dan dapat diperpanjang.']
                    ];
                @endphp

                @foreach ($faq_keanggotaan as $f)
                <div class="border rounded-xl bg-gray-50">
                    <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                            data-faq-toggle="faq-{{ $f['id'] }}">
                        <span>{{ $f['q'] }}</span>
                        <svg class="w-4 h-4 text-gray-400 transition-transform"
                             data-faq-icon="faq-{{ $f['id'] }}" fill="none"
                             stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                        {{ $f['a'] }}
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <!-- ============= SECTION: PEMINJAMAN ============= -->
        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6 hidden"
             data-category-section="peminjaman">

            <div class="mb-5">
                <h3 class="font-semibold text-base text-gray-800">Peminjaman</h3>
                <p class="text-xs text-gray-500">Pertanyaan umum tentang peminjaman & pengembalian</p>
            </div>

            @php
                $faq_peminjaman = [
                    ['id'=>'p1','q'=>'Berapa banyak buku yang dapat dipinjam?','a'=>'Anda dapat meminjam maksimal 5 buku.'],
                    ['id'=>'p2','q'=>'Berapa lama masa peminjaman?','a'=>'Masa peminjaman standar adalah 14 hari.'],
                    ['id'=>'p3','q'=>'Apakah masa peminjaman dapat diperpanjang?','a'=>'Ya, perpanjang 1–2 kali jika buku tidak sedang dipesan.']
                ];
            @endphp

            <div class="space-y-3 text-sm">
                @foreach ($faq_peminjaman as $f)
                <div class="border rounded-xl bg-gray-50">
                    <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                            data-faq-toggle="faq-{{ $f['id'] }}">
                        <span>{{ $f['q'] }}</span>
                        <svg class="w-4 h-4 text-gray-400 transition-transform"
                             data-faq-icon="faq-{{ $f['id'] }}" fill="none"
                             stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                        {{ $f['a'] }}
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <!-- ============= SECTION: DENDA (DEFAULT OPEN) ============= -->
        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6"
             data-category-section="denda">

            <div class="mb-5">
                <h3 class="font-semibold text-base text-gray-800">Denda & Biaya</h3>
                <p class="text-xs text-gray-500">Informasi tentang denda keterlambatan & biaya penggantian</p>
            </div>

            @php
                $faq_denda = [
                    ['id'=>'d1','q'=>'Apakah ada denda keterlambatan?',
                     'a'=>'Ya, denda dikenakan per hari untuk keterlambatan pengembalian.'],

                    ['id'=>'d2','q'=>'Apa yang terjadi jika buku hilang?',
                     'a'=>'Buku hilang harus diganti dengan buku yang sama atau membayar biaya pengganti.'],

                    ['id'=>'d3','q'=>'Bagaimana cara membayar denda?',
                     'a'=>'Denda dapat dibayar di loket, baik tunai maupun non-tunai.'],

                    ['id'=>'d4','q'=>'Apakah denda memiliki batas maksimal?',
                     'a'=>'Ya, terdapat batas maksimal denda per buku.']
                ];
            @endphp

            <div class="space-y-3 text-sm">
                @foreach ($faq_denda as $f)
                <div class="border rounded-xl bg-gray-50">
                    <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                            data-faq-toggle="faq-{{ $f['id'] }}">
                        <span>{{ $f['q'] }}</span>
                        <svg class="w-4 h-4 text-gray-400 transition-transform"
                             data-faq-icon="faq-{{ $f['id'] }}" fill="none"
                             stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                        {{ $f['a'] }}
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <!-- ============= SECTION: JAM & AKSES ============= -->
        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6 hidden"
             data-category-section="jam">

            <div class="mb-5">
                <h3 class="font-semibold text-base text-gray-800">Jam & Akses</h3>
                <p class="text-xs text-gray-500">Pertanyaan tentang jam operasional & akses digital</p>
            </div>

            @php
                $faq_jam = [
                    ['id'=>'j1','q'=>'Jam operasional perpustakaan?',
                     'a'=>'Senin–Jumat: 08.00–20.00, Sabtu: 09.00–18.00, Minggu: 10.00–16.00.'],

                    ['id'=>'j2','q'=>'Apakah koleksi digital bisa diakses dari rumah?',
                     'a'=>'Ya, koleksi digital dapat diakses 24 jam melalui portal online.'],

                    ['id'=>'j3','q'=>'Apakah perpustakaan tutup di hari libur?',
                     'a'=>'Biasanya tutup pada hari libur nasional tertentu.']
                ];
            @endphp

            <div class="space-y-3 text-sm">
                @foreach ($faq_jam as $f)
                <div class="border rounded-xl bg-gray-50">
                    <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                            data-faq-toggle="faq-{{ $f['id'] }}">
                        <span>{{ $f['q'] }}</span>
                        <svg class="w-4 h-4 text-gray-400 transition-transform"
                             data-faq-icon="faq-{{ $f['id'] }}" fill="none"
                             stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                        {{ $f['a'] }}
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</section>

<!-- FAQ JS -->
<script>
    // ACCORDION
    const faqButtons = document.querySelectorAll("[data-faq-toggle]");

    faqButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const id = btn.getAttribute("data-faq-toggle");
            const content = document.getElementById(id);
            const icon = document.querySelector(`[data-faq-icon="${id}"]`);

            const wasHidden = content.classList.contains("hidden");

            document.querySelectorAll("[id^='faq-']").forEach(c => c.classList.add("hidden"));
            document.querySelectorAll("[data-faq-icon]").forEach(i => i.classList.remove("rotate-180"));

            if (wasHidden) {
                content.classList.remove("hidden");
                icon.classList.add("rotate-180");
            }
        });
    });

    // CATEGORY SWITCH
    const catBtns = document.querySelectorAll(".category-btn");
    const catSections = document.querySelectorAll("[data-category-section]");

    catBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            const category = btn.getAttribute("data-category");

            catBtns.forEach(b => {
                b.classList.remove("bg-green-50", "text-green-700", "border-green-500");
                b.classList.add("text-gray-600", "border-transparent");
                b.querySelector(".category-badge").classList.remove("bg-green-600", "text-white");
                b.querySelector(".category-badge").classList.add("border");
            });

            btn.classList.add("bg-green-50", "text-green-700", "border-green-500");
            const badge = btn.querySelector(".category-badge");
            badge.classList.add("bg-green-600", "text-white");
            badge.classList.remove("border");

            catSections.forEach(sec => {
                sec.classList.toggle("hidden", sec.getAttribute("data-category-section") !== category);
            });
        });
    });
</script>

<!-- CTA -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-sm p-8 text-center">

            <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center mx-auto mb-4">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M8 10a4 4 0 118 0c0 1.657-1.333 2.5-2.5 3.25C12.5 14 12 15 12 16m.01 3h-.02"/>
                </svg>
            </div>

            <h3 class="text-lg font-semibold text-gray-800 mb-1">Masih Ada Pertanyaan?</h3>
            <p class="text-xs text-gray-500 mb-6">
                Tidak menemukan yang Anda cari? Hubungi tim kami!
            </p>

            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ url('/contact') }}"
                   class="px-5 py-2 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700">
                    Hubungi Kami
                </a>

                <a href="{{ url('/register') }}"
                   class="px-5 py-2 border border-green-600 text-green-700 rounded-lg text-sm hover:bg-green-50">
                    Daftar Anggota
                </a>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 pt-10 pb-6">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-6">

        <div>
            <h4 class="font-semibold text-sm">Perpustakaan Digital</h4>
            <p class="text-xs text-gray-400 mt-3">
                Akses ribuan koleksi buku dan sumber pengetahuan digital.
            </p>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Tautan Cepat</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="{{ url('/katalog') }}" class="hover:text-white">Katalog Buku</a></li>
                <li><a href="{{ url('/agenda') }}" class="hover:text-white">Agenda</a></li>
                <li><a href="{{ url('/pengumuman') }}" class="hover:text-white">Pengumuman</a></li>
                <li><a href="{{ url('/register') }}" class="hover:text-white">Pendaftaran</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Informasi</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="{{ url('/faq') }}" class="hover:text-white">FAQ</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-white">Kontak</a></li>
                <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Kontak</h4>
            <p class="text-xs text-gray-400">
                Jl. Pendidikan No. 123<br>Jakarta Selatan, 12345
            </p>
            <p class="text-xs text-gray-400 mt-2">Telp: (021) 1234-5678</p>
            <p class="text-xs text-gray-400">Email: info@perpustakaan.id</p>
        </div>

    </div>

    <div class="border-t border-gray-800 pt-4">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between text-xs text-gray-500">
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
