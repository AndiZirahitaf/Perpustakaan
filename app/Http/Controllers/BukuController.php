<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        // Ambil semua buku dari database
        $buku = Buku::all();

        // Kirim ke view
        return view('pengunjung.katalog', compact('buku'));
    }

    public function show($id)
{
    $buku = Buku::findOrFail($id);

    // Rekomendasi sederhana (selain buku ini)
    $rekomendasi = Buku::where('id_buku', '!=', $id)
        ->limit(4)
        ->get();

    return view('pengunjung.detail_book', compact('buku', 'rekomendasi'));
}
}