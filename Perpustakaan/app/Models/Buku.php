<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'isbn',
        'status_ketersediaan'
    ];
}