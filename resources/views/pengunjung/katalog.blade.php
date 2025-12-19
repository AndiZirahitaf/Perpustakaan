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
            <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white font-bold">BT</div>
            <div>
                <h1 class="text-lg font-bold text-green-700 leading-tight">BookTech</h1>
                <p class="text-xs text-gray-500 -mt-1">Perpustakaan Digital</p>
            </div>
        </div>

        <div class="flex items-center gap-8">

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-6 text-sm text-gray-600">
                <a href="#" class="hover:text-green-600">Home</a>
                <a href="#" class="hover:text-green-600">Katalog</a>
                <a href="#" class="hover:text-green-600">Pengumuman</a>
                <a href="#" class="hover:text-green-600">Agenda</a>

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
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Pendaftaran</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">FAQ</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kontak</a>
                    </div>
                </div>
            </nav>

            <a href="#"
               class="hidden md:inline-block px-5 py-2 rounded-lg bg-green-600 text-white text-sm font-semibold hover:bg-green-700">
                Login
            </a>

            <button id="menuBtn" class="md:hidden text-gray-700 text-2xl">☰</button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden bg-white border-t border-gray-200 md:hidden">
        <nav class="flex flex-col p-4 text-sm text-gray-700 space-y-3">
            <a href="#">Home</a>
            <a href="#">Katalog</a>
            <a href="#">Pengumuman</a>
            <a href="#">Agenda</a>

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
                    <a href="#" class="block py-1">Pendaftaran</a>
                    <a href="#" class="block py-1">FAQ</a>
                    <a href="#" class="block py-1">Kontak</a>
                </div>
            </div>

            <a href="#" class="text-green-700 font-semibold mt-2">Login</a>
        </nav>
    </div>
</header>

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
            <input type="text" id="searchInput" class="w-full border rounded-lg px-4 py-3 text-sm 
                   focus:ring-2 focus:ring-green-500 outline-none"
                   placeholder="Cari buku berdasarkan judul, penulis, atau ISBN...">

            <button id="searchBtn" class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg text-sm font-semibold">
                Cari
            </button>
            
            <button id="resetBtn" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm font-semibold">
                Reset
            </button>
        </div>

        <!-- Categories -->
        <div class="flex flex-wrap gap-3 mt-6">
            <button class="category-btn px-5 py-2 text-sm bg-green-600 text-white rounded-full" data-category="all">Semua Buku</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="fiksi">Fiksi</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="pengembangan">Pengembangan Diri</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="keuangan">Keuangan</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="sejarah">Sejarah</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="produktivitas">Produktivitas</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="psikologi">Psikologi</button>
        </div>

    </div>
</section>

<!-- BOOK LIST -->
<section class="pb-14">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <h3 class="font-semibold text-gray-700 mb-4">Buku Tersedia</h3>
        <p class="text-sm text-gray-500 mb-6">
            Menampilkan <span id="bookCount">12</span> buku
        </p>

        <div id="bookGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
            <!-- Books will be dynamically loaded here -->
        </div>

        <div id="noResults" class="hidden text-center py-12">
            <div class="text-gray-400 text-5xl mb-4">📚</div>
            <p class="text-gray-600 font-semibold">Tidak ada buku yang ditemukan</p>
            <p class="text-gray-500 text-sm mt-2">Coba ubah kata kunci pencarian Anda</p>
        </div>

        <div id="pagination" class="flex justify-center items-center gap-2 mt-10">
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">‹</button>
            <button class="w-8 h-8 rounded-lg bg-green-600 text-white text-sm">1</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">2</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">3</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">›</button>
        </div>

    </div>
</section>

<!-- FOOTER --->
<footer class="bg-gray-900 text-gray-300 pt-10 pb-6">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-6">

        <div>
            <h4 class="font-semibold text-sm">Perpustakaan Digital</h4>
            <p class="text-xs text-gray-400 mt-3">Akses ribuan buku digital.</p>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Tautan Cepat</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="#" class="hover:text-white">Home</a></li>
                <li><a href="#" class="hover:text-white">Agenda</a></li>
                <li><a href="#" class="hover:text-white">Pengumuman</a></li>
                <li><a href="#" class="hover:text-white">Pendaftaran Anggota</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Informasi</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="#" class="hover:text-white">FAQ</a></li>
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

<script>
// Sample book data (replace with actual data from backend)
const allBooks = [
    { id: 1, judul: 'Atomic Habits', penulis: 'James Clear', tahun: 2018, penerbit: 'Penguin', kategori: 'pengembangan', status: 'Tersedia', isbn: '978-0735211292' },
    { id: 2, judul: 'Sapiens', penulis: 'Yuval Noah Harari', tahun: 2014, penerbit: 'Harper', kategori: 'sejarah', status: 'Tersedia', isbn: '978-0062316097' },
    { id: 3, judul: 'Rich Dad Poor Dad', penulis: 'Robert Kiyosaki', tahun: 1997, penerbit: 'Warner Books', kategori: 'keuangan', status: 'Dipinjam', isbn: '978-1612680194' },
    { id: 4, judul: 'The Psychology of Money', penulis: 'Morgan Housel', tahun: 2020, penerbit: 'Harriman', kategori: 'keuangan', status: 'Tersedia', isbn: '978-0857197689' },
    { id: 5, judul: 'Deep Work', penulis: 'Cal Newport', tahun: 2016, penerbit: 'Grand Central', kategori: 'produktivitas', status: 'Tersedia', isbn: '978-1455586691' },
    { id: 6, judul: 'Thinking Fast and Slow', penulis: 'Daniel Kahneman', tahun: 2011, penerbit: 'Farrar', kategori: 'psikologi', status: 'Tersedia', isbn: '978-0374533557' },
    { id: 7, judul: 'Harry Potter', penulis: 'J.K. Rowling', tahun: 1997, penerbit: 'Bloomsbury', kategori: 'fiksi', status: 'Tersedia', isbn: '978-0439708180' },
    { id: 8, judul: 'The Alchemist', penulis: 'Paulo Coelho', tahun: 1988, penerbit: 'HarperCollins', kategori: 'fiksi', status: 'Dipinjam', isbn: '978-0062315007' },
    { id: 9, judul: 'Essentialism', penulis: 'Greg McKeown', tahun: 2014, penerbit: 'Crown', kategori: 'produktivitas', status: 'Tersedia', isbn: '978-0804137386' },
    { id: 10, judul: 'Man Search for Meaning', penulis: 'Viktor Frankl', tahun: 1946, penerbit: 'Beacon Press', kategori: 'psikologi', status: 'Tersedia', isbn: '978-0807014271' },
    { id: 11, judul: 'The Intelligent Investor', penulis: 'Benjamin Graham', tahun: 1949, penerbit: 'Harper Business', kategori: 'keuangan', status: 'Tersedia', isbn: '978-0060555665' },
    { id: 12, judul: 'Homo Deus', penulis: 'Yuval Noah Harari', tahun: 2015, penerbit: 'Harper', kategori: 'sejarah', status: 'Tersedia', isbn: '978-0062464347' },
    { id: 13, judul: '1984', penulis: 'George Orwell', tahun: 1949, penerbit: 'Secker & Warburg', kategori: 'fiksi', status: 'Tersedia', isbn: '978-0451524935' },
    { id: 14, judul: 'The Power of Habit', penulis: 'Charles Duhigg', tahun: 2012, penerbit: 'Random House', kategori: 'pengembangan', status: 'Tersedia', isbn: '978-0812981605' },
    { id: 15, judul: 'Think and Grow Rich', penulis: 'Napoleon Hill', tahun: 1937, penerbit: 'Ralston Society', kategori: 'keuangan', status: 'Dipinjam', isbn: '978-1585424337' },
    { id: 16, judul: 'The 7 Habits', penulis: 'Stephen Covey', tahun: 1989, penerbit: 'Simon & Schuster', kategori: 'produktivitas', status: 'Tersedia', isbn: '978-0743269513' },
    { id: 17, judul: 'Influence', penulis: 'Robert Cialdini', tahun: 1984, penerbit: 'Harper Business', kategori: 'psikologi', status: 'Tersedia', isbn: '978-0061241895' },
    { id: 18, judul: 'The Hobbit', penulis: 'J.R.R. Tolkien', tahun: 1937, penerbit: 'Allen & Unwin', kategori: 'fiksi', status: 'Tersedia', isbn: '978-0547928227' },
    { id: 19, judul: 'A Brief History of Time', penulis: 'Stephen Hawking', tahun: 1988, penerbit: 'Bantam', kategori: 'sejarah', status: 'Dipinjam', isbn: '978-0553380163' },
    { id: 20, judul: 'The Lean Startup', penulis: 'Eric Ries', tahun: 2011, penerbit: 'Crown Business', kategori: 'produktivitas', status: 'Tersedia', isbn: '978-0307887894' }
];

// const allBooks = @json($buku);

let currentBooks = [...allBooks];
let currentCategory = 'all';
let searchQuery = '';
let currentPage = 1;
const booksPerPage = 8;

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    renderBooks(currentBooks);
    setupEventListeners();
});

function renderBooks(books) {
    const grid = document.getElementById('bookGrid');
    const noResults = document.getElementById('noResults');
    const bookCount = document.getElementById('bookCount');
    
    bookCount.textContent = books.length;
    
    if (books.length === 0) {
        grid.classList.add('hidden');
        noResults.classList.remove('hidden');
        document.getElementById('pagination').classList.add('hidden');
        return;
    }
    
    grid.classList.remove('hidden');
    noResults.classList.add('hidden');
    
    // Calculate pagination
    const totalPages = Math.ceil(books.length / booksPerPage);
    const startIndex = (currentPage - 1) * booksPerPage;
    const endIndex = startIndex + booksPerPage;
    const paginatedBooks = books.slice(startIndex, endIndex);
    
    grid.innerHTML = paginatedBooks.map(book => `
        <a href="#" class="bg-white rounded-xl shadow hover:shadow-md transition p-3 flex flex-col">
            <div class="rounded-xl overflow-hidden bg-gradient-to-br from-green-400 to-green-600">
                <div class="w-full h-40 flex items-center justify-center text-white font-bold text-2xl">
                    ${book.judul.charAt(0)}
                </div>
            </div>

            ${book.status === 'Tersedia' 
                ? '<span class="mt-3 inline-block text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full w-fit">Tersedia</span>'
                : '<span class="mt-3 inline-block text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full w-fit">Dipinjam</span>'
            }

            <h4 class="font-semibold text-sm mt-2">${book.judul}</h4>
            <p class="text-xs text-gray-500">${book.penulis}</p>
            <p class="text-xs text-gray-400">${book.tahun}</p>

            <span class="mt-2 text-[10px] bg-gray-100 px-2 py-1 rounded-full text-gray-600 w-fit">
                ${book.penerbit}
            </span>
        </a>
    `).join('');
    
    renderPagination(totalPages);
}

function filterBooks() {
    let filtered = [...allBooks];
    
    // Filter by category
    if (currentCategory !== 'all') {
        filtered = filtered.filter(book => book.kategori === currentCategory);
    }
    
    // Filter by search query
    if (searchQuery) {
        const query = searchQuery.toLowerCase();
        filtered = filtered.filter(book => 
            book.judul.toLowerCase().includes(query) ||
            book.penulis.toLowerCase().includes(query) ||
            book.isbn.includes(query)
        );
    }
    
    currentBooks = filtered;
    currentPage = 1; // Reset to first page
    renderBooks(currentBooks);
}

function renderPagination(totalPages) {
    const pagination = document.getElementById('pagination');
    
    if (totalPages <= 1) {
        pagination.classList.add('hidden');
        return;
    }
    
    pagination.classList.remove('hidden');
    
    let pages = '';
    
    // Previous button
    pages += `
        <button onclick="changePage(${currentPage - 1})" 
                ${currentPage === 1 ? 'disabled class="w-8 h-8 rounded-lg border bg-gray-100 text-gray-400 text-sm cursor-not-allowed"' : 'class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm"'}>
            ‹
        </button>
    `;
    
    // Page numbers
    const maxVisible = 5;
    let startPage = Math.max(1, currentPage - Math.floor(maxVisible / 2));
    let endPage = Math.min(totalPages, startPage + maxVisible - 1);
    
    if (endPage - startPage < maxVisible - 1) {
        startPage = Math.max(1, endPage - maxVisible + 1);
    }
    
    // First page
    if (startPage > 1) {
        pages += `
            <button onclick="changePage(1)" class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">
                1
            </button>
        `;
        if (startPage > 2) {
            pages += `<span class="px-2 text-gray-500">...</span>`;
        }
    }
    
    // Page range
    for (let i = startPage; i <= endPage; i++) {
        pages += `
            <button onclick="changePage(${i})" 
                    class="w-8 h-8 rounded-lg ${i === currentPage ? 'bg-green-600 text-white' : 'border bg-white hover:bg-gray-100'} text-sm">
                ${i}
            </button>
        `;
    }
    
    // Last page
    if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
            pages += `<span class="px-2 text-gray-500">...</span>`;
        }
        pages += `
            <button onclick="changePage(${totalPages})" class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">
                ${totalPages}
            </button>
        `;
    }
    
    // Next button
    pages += `
        <button onclick="changePage(${currentPage + 1})" 
                ${currentPage === totalPages ? 'disabled class="w-8 h-8 rounded-lg border bg-gray-100 text-gray-400 text-sm cursor-not-allowed"' : 'class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm"'}>
            ›
        </button>
    `;
    
    pagination.innerHTML = pages;
}

function changePage(page) {
    const totalPages = Math.ceil(currentBooks.length / booksPerPage);
    if (page < 1 || page > totalPages) return;
    
    currentPage = page;
    renderBooks(currentBooks);
    
    // Scroll to top of book list
    document.querySelector('section.pb-14').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function setupEventListeners() {
    // Search input - live search
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', (e) => {
        searchQuery = e.target.value.trim();
        filterBooks();
    });
    
    // Search button
    document.getElementById('searchBtn').addEventListener('click', () => {
        searchQuery = searchInput.value.trim();
        filterBooks();
    });
    
    // Enter key on search
    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            searchQuery = searchInput.value.trim();
            filterBooks();
        }
    });
    
    // Reset button
    document.getElementById('resetBtn').addEventListener('click', () => {
        searchInput.value = '';
        searchQuery = '';
        currentCategory = 'all';
        
        // Reset category buttons
        document.querySelectorAll('.category-btn').forEach(btn => {
            if (btn.dataset.category === 'all') {
                btn.classList.remove('bg-gray-100', 'hover:bg-gray-200');
                btn.classList.add('bg-green-600', 'text-white');
            } else {
                btn.classList.remove('bg-green-600', 'text-white');
                btn.classList.add('bg-gray-100', 'hover:bg-gray-200');
            }
        });
        
        filterBooks();
    });
    
    // Category buttons
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            currentCategory = btn.dataset.category;
            
            // Update button styles
            document.querySelectorAll('.category-btn').forEach(b => {
                b.classList.remove('bg-green-600', 'text-white');
                b.classList.add('bg-gray-100', 'hover:bg-gray-200');
            });
            btn.classList.remove('bg-gray-100', 'hover:bg-gray-200');
            btn.classList.add('bg-green-600', 'text-white');
            
            filterBooks();
        });
    });
    
    // Menu toggle
    document.getElementById('menuBtn').addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
    
    // Desktop dropdown
    const dropdownBtn = document.getElementById('dropdownBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const dropdownIcon = document.getElementById('dropdownIcon');

    dropdownBtn.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
        dropdownIcon.classList.toggle('rotate-180');
    });

    document.addEventListener('click', (e) => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
            dropdownIcon.classList.remove('rotate-180');
        }
    });
    
    // Mobile dropdown
    document.getElementById('mobileDropdownBtn').addEventListener('click', () => {
        document.getElementById('mobileDropdownMenu').classList.toggle('hidden');
        document.getElementById('mobileDropdownIcon').classList.toggle('rotate-180');
    });
}
</script>

</body>
</html>