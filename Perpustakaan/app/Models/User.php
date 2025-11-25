<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'pustakawan'; // atau 'anggota' tergantung kebutuhan
    protected $primaryKey = 'id_admin'; // atau 'id_anggota'
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'email' // jika menggunakan anggota
    ];

    protected $hidden = [
        'password',
    ];
}