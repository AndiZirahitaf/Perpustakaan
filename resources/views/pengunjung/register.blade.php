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

<!-- ================= FORM REGISTRASI ================= -->
<section class="max-w-4xl mx-auto px-4 lg:px-0 mb-20">

    <form action="{{ route('register.store') }}" method="POST" class="max-w-4xl mx-auto px-4 lg:px-0 mb-20">
    @csrf
        <div class="bg-white rounded-2xl shadow-md p-8 space-y-10">

            <!-- INFORMASI PRIBADI -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center text-sm font-bold">1</div>
                    <h2 class="text-lg font-semibold">Informasi Pribadi</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">

                    <div>
                        <label class="text-sm font-semibold">Nama Lengkap *</label>
                        <input type="text" name="name" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="Masukkan nama lengkap">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Email *</label>
                        <input type="email" name="email" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="nama@email.com">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Nomor Telepon *</label>
                        <input type="text" name="phone" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="08xx xxxx xxxx">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Tanggal Lahir *</label>
                        <input type="date" name="birth_date" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="text-sm font-semibold">Jenis Kelamin *</label>
                    <div class="flex items-center gap-6 mt-2 text-sm">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" value="L" class="accent-green-600"> Laki-laki
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" value="P" class="accent-green-600"> Perempuan
                        </label>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="text-sm font-semibold">Alamat Lengkap *</label>
                    <textarea class="mt-1 w-full px-4 py-2 border rounded-lg text-sm h-24" name="address" required placeholder="Masukkan alamat lengkap"></textarea>
                </div>
            </div>

            <!-- INFORMASI AKUN -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 rounded-full bg-yellow-500 text-white flex items-center justify-center text-sm font-bold">2</div>
                    <h2 class="text-lg font-semibold">Informasi Akun</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-sm font-semibold">Username *</label>
                        <input type="text" name="username" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="Pilih username">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Password *</label>
                        <input type="password" name="password" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="Minimal 8 karakter">
                    </div>

                    <div class="md:col-span-2">
                        <label class="text-sm font-semibold">Konfirmasi Password *</label>
                        <input type="password" name="password_confirmation" required class="mt-1 w-full px-4 py-2 border rounded-haspopup rounded-lg text-sm" placeholder="Masukkan ulang password">
                    </div>
                </div>

                <div class="mt-5">
                    <label class="flex items-start gap-2 text-sm">
                        <input type="checkbox" name="terms" required class="mt-1 accent-green-600">
                        <span>Saya menyetujui syarat dan ketentuan perpustakaan.</span>
                    </label>
                </div>

                <div class="mt-6 flex justify-end">
                    <button class="px-6 py-2 bg-green-600 text-white rounded-lg text-sm font-semibold hover:bg-green-700">
                        Daftar
                    </button>
                </div>
            </div>

        </div>

        <!-- INFORMASI PENTING -->
        <div class="bg-blue-50 mt-10 rounded-2xl p-6 shadow-sm border border-blue-100">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-8 h-8 bg-blue-600 text-white flex items-center justify-center rounded-full text-sm font-bold">i</div>
                <h3 class="text-sm font-semibold text-blue-700">Informasi Penting</h3>
            </div>

            <ul class="text-xs text-gray-600 space-y-1 ml-10">
                <li>Pendaftaran keanggotaan gratis</li>
                <li>Verifikasi membutuhkan waktu 1–2 hari kerja</li>
                <li>Email konfirmasi dikirim setelah verifikasi</li>
                <li>Kartu anggota dapat diambil di perpustakaan</li>
            </ul>
        </div>
    </form>

</section>

</body>
</html>
