<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;

    protected $table = 'konten';
    protected $primaryKey = 'id_konten';
    public $timestamps = false;

    protected $fillable = [
        'id_admin',
        'judul',
        'isi_konten',
        'tanggal_publikasi',
        'tipe_konten'
    ];

    public function pustakawan()
    {
        return $this->belongsTo(Pustakawan::class, 'id_admin', 'id_admin');
    }
}