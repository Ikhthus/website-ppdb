<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Verifikasi extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'verifikasi';
    protected $fillable = [
        'id_data_siswa',
        'id_users',
        'status'
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

    public function program()
    {
        return $this->belongsTo(Program::class, 'id_data_siswa', 'id_data_siswa');
    }
}
