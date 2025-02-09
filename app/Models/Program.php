<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Program extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'programs';
    protected $fillable = [
        'id_data_siswa',
        'id_users',
        'kelas',
    ];

    public function dataSiswa()
    {
        return $this->belongsTo(DataSiswa::class, 'id_data_siswa');
    }

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function verifikasi()
    {
        return $this->hasOne(Verifikasi::class, 'id_data_siswa', 'id_data_siswa');
    }
}
