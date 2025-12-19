<?php

namespace App\Http\Controllers;

use App\Models\Konten;

class PengumumanController extends Controller
{
    // HOME
    public function home()
    {
        $konten = Konten::orderBy('tanggal_publikasi', 'desc')
            ->limit(3)
            ->get();

        return view('pengunjung.home_pengunjung', compact('konten'));
    }

    // HALAMAN PENGUMUMAN
    public function index()
    {
        $konten = Konten::orderBy('tanggal_publikasi', 'desc')
            ->paginate(5);

        return view('pengunjung.pengumuman', compact('konten'));
    }
}

