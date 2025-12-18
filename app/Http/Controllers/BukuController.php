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
}