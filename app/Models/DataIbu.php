<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DataIbu extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;
    protected $table = 'data_ibu';
    protected $fillable = [
        'id_data_siswa',
        'id_users',
        'nama_lengkap',
        'nama_siswa',
        'status',
        'nik',
        'kewarganegaraan',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan_terakhir',
        'pekerjaan',
        'penghasilan',
        'no_handphone_aktif',
        'status_tempat_tinggal',
        'alamat',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'kelurahan_desa',
        'nama_jalan',
        'kode_pos',
        'no_kk', 
    ];
}
