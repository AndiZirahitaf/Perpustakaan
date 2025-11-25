<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

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

    protected $hidden = [
        'password',
    ];
}