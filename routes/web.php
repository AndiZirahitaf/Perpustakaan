<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PengumumanController;

// ==========================
// ROUTE HALAMAN PENGUNJUNG
// ==========================

// HOME PENGUNJUNG
Route::get('/', function () {
    return view('pengunjung.home_pengunjung');
})->name('home');


// // MIDDLEWARE LOGIN
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('pengunjung.dashboard');
//     })->name('dashboard');
// });

// LOGIN
// Route::get('/login', function () {
//     return view('pengunjung.login');
// })->name('login');
Route::get('/login', [UserController::class, 'showLogin'])->name('login.show');
Route::post('/log', [UserController::class, 'login'])->name('login.store');


// asdasdasd
Route::get('/register', [UserController::class, 'showRegister'])
    ->name('register.show');

Route::post('/regist', [UserController::class, 'register'])
    ->name('register.store');


// KATALOG

Route::get('/katalog', [BukuController::class, 'index'])
    ->name('katalog');
Route::get('/buku/{id}', [BukuController::class, 'show'])
    ->name('buku.show');


// FAQ
Route::get('/faq', function () {
    return view('pengunjung.faq');
})->name('faq');

// CONTACT
Route::get('/contact', function () {
    return view('pengunjung.contact');
})->name('contact');

// AGENDA
Route::get('/agenda', function () {
    return view('pengunjung.agenda');
})->name('agenda');

// DETAIL BOOK (versi statis dulu)
Route::get('/detail-book', function () {
    return view('pengunjung.detail_book');
})->name('detail.book');

Route::get('/pengumuman', [PengumumanController::class, 'index']);
