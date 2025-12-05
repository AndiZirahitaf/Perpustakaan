<?php

use Illuminate\Support\Facades\Route;

// ==========================
// ROUTE HALAMAN PENGUNJUNG
// ==========================

// HOME PENGUNJUNG
Route::get('/', function () {
    return view('pengunjung.home_pengunjung');
})->name('home');

// LOGIN
Route::get('/login', function () {
    return view('pengunjung.login');
})->name('login');

// REGISTER
Route::get('/register', function () {
    return view('pengunjung.register');
})->name('register');

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
