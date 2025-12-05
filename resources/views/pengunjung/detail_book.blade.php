@php
// Ambil judul dari URL
$title = $title ?? "The Midnight Library";

// Dummy data
$book = [
    "title" => $title,
    "author" => "Matt Haig",
    "isbn" => "978-1-786-89244-7",
    "publisher" => "Canongate Books",
    "year" => "2020",
    "stock" => "5 eksemplar",
    "status" => "Tersedia",
    "image" => "book1.jpg",
    "description" => "Antara hidup dan mati ada sebuah perpustakaan, dan di dalam perpustakaan itu, rak-raknya terus berjalan selamanya. Setiap buku memberikan kesempatan untuk mencoba kehidupan lain..."
];

// Rekomendasi dummy
$recommend = [
    ["img"=>"book2.jpg","title"=>"The Psychology of Money","author"=>"Morgan Housel"],
    ["img"=>"book1.jpg","title"=>"Deep Work","author"=>"Cal Newport"],
    ["img"=>"book2.jpg","title"=>"Thinking, Fast and Slow","author"=>"Daniel Kahneman"],
    ["img"=>"book1.jpg","title"=>"1984","author"=>"George Orwell"],
];
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book['title'] }} - Detail Buku</title>
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
                        <svg id="dropdownIcon" class="w-4 h-4 transition" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
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
               class="hidden md:inline-block px-5 py-2 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700">
                Login
            </a>

            <button id="menuBtn" class="md:hidden text-gray-700 text-2xl">☰</button>
        </div>

    </div>

    <!-- Mobile -->
    <div id="mobileMenu" class="hidden bg-white border-t md:hidden">
        <nav class="flex flex-col p-4 text-sm space-y-3">
            <a href="{{ url('/home-pengunjung') }}">Home</a>
            <a href="{{ url('/katalog') }}">Katalog</a>
            <a href="{{ url('/pengumuman') }}">Pengumuman</a>
            <a href="{{ url('/agenda') }}">Agenda</a>
            <a href="{{ url('/register') }}">Pendaftaran</a>
            <a href="{{ url('/faq') }}">FAQ</a>
            <a href="{{ url('/contact') }}">Kontak</a>
            <a href="{{ url('/login') }}" class="text-green-700 font-semibold">Login</a>
        </nav>
    </div>
</header>

<script>
document.getElementById("dropdownBtn").onclick = () => {
    dropdownMenu.classList.toggle("hidden");
    dropdownIcon.classList.toggle("rotate-180");
};
document.getElementById("menuBtn").onclick = () => {
    mobileMenu.classList.toggle("hidden");
};
</script>

<div class="h-20"></div>

<!-- BACK -->
<div class="max-w-7xl mx-auto px-4 lg:px-8 py-6">
    <a href="{{ url('/katalog') }}" class="text-gray-600 text-sm flex items-center gap-1 hover:text-green-600">
        ← Kembali ke Katalog
    </a>
</div>

<!-- ================= CONTENT ================= -->
<section class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-10 py-4">

    <!-- Image -->
    <div>
        <img src="{{ asset('assets/img/' . $book['image']) }}"
             class="rounded-2xl shadow w-full object-cover h-[480px]">
    </div>

    <!-- Info -->
    <div>
        <h2 class="text-2xl font-bold">{{ $book['title'] }}</h2>
        <p class="text-gray-500 text-sm mb-4">oleh {{ $book['author'] }}</p>

        @if ($book['status'] === "Tersedia")
            <span class="inline-block text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">Tersedia</span>
        @else
            <span class="inline-block text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full">Dipinjam</span>
        @endif

        <!-- Info Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">

            <div class="bg-green-50 p-4 rounded-xl border">
                <p class="text-xs text-gray-500">ISBN</p>
                <p class="font-semibold">{{ $book['isbn'] }}</p>
            </div>

            <div class="bg-green-50 p-4 rounded-xl border">
                <p class="text-xs text-gray-500">Penerbit</p>
                <p class="font-semibold">{{ $book['publisher'] }}</p>
            </div>

            <div class="bg-green-50 p-4 rounded-xl border">
                <p class="text-xs text-gray-500">Tahun Terbit</p>
                <p class="font-semibold">{{ $book['year'] }}</p>
            </div>

            <div class="bg-green-50 p-4 rounded-xl border">
                <p class="text-xs text-gray-500">Jumlah Stok</p>
                <p class="font-semibold">{{ $book['stock'] }}</p>
            </div>

        </div>

        <!-- Description -->
        <h3 class="mt-6 font-semibold">Tentang Buku Ini</h3>
        <p class="text-sm text-gray-600 leading-relaxed mt-2 whitespace-pre-line">
            {{ $book['description'] }}
        </p>
    </div>

</section>

<!-- ================= RECOMMEND ================= -->
<section class="max-w-7xl mx-auto px-4 lg:px-8 py-10">
    <h3 class="font-semibold text-gray-700">Anda Mungkin Juga Suka</h3>
    <p class="text-sm text-gray-500 mb-6">Temukan lebih banyak buku serupa</p>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">

        @foreach ($recommend as $rec)
        <a href="{{ url('/detail-book/' . urlencode($rec['title'])) }}"
           class="bg-white rounded-xl shadow hover:shadow-md transition p-3 block">
            <img src="{{ asset('assets/img/' . $rec['img']) }}"
                 class="rounded-xl h-40 w-full object-cover">
            <h4 class="font-semibold text-sm mt-2">{{ $rec['title'] }}</h4>
            <p class="text-xs text-gray-500">{{ $rec['author'] }}</p>
        </a>
        @endforeach

    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 pt-10 pb-6 mt-10">
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
                <li><a href="{{ url('/contact') }}" class="hover:text-white">Kontak Kami</a></li>
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
