<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = 'konten';
    protected $primaryKey = 'id_konten';

    

    protected $fillable = [
        'id_admin',
        'judul',
        'isi_konten',
        'tanggal_publikasi',
        'tipe_konten',
        'gambar',
    ];

    // Relasi: konten milik satu admin
    public function pustakawan()
    {
        return $this->belongsTo(Pustakawan::class, 'id_admin');
    }
}