<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;

class PengumumanController extends Controller
{
    public function index()
{
    $konten = Konten::orderBy('tanggal_publikasi', 'desc')->get();
    return view('pengunjung.pengumuman', compact('konten'));
}
}
