<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::post('/login', [UserController::class, 'login']);


// asdasdasd
Route::get('/register', [UserController::class, 'showRegister'])
    ->name('register');

Route::post('/regist', [UserController::class, 'register'])
    ->name('register.store');


// KATALOG
Route::get('/katalog', function () {
    return view('pengunjung.katalog');
})->name('katalog');

// PENGUMUMAN
Route::get('/pengumuman', function () {
    return view('pengunjung.pengumuman');
})->name('pengumuman');

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