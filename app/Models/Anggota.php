<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';

    public $timestamps = false;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'status_keanggotaan',
        'tanggal_daftar'
    ];

    // Relasi: anggota punya banyak peminjaman
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_anggota');
    }
}
