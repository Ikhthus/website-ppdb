<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DataSiswa extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;
    protected $table = 'data_siswa';
    protected $fillable = [
        'id_users',
        'no_pendaftaran',
        'nama_lengkap',
        'nisn',
        'kewarganegaraan',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'anak_ke',
        'jumlah_saudara',
        'agama',
        'cita_cita',
        'no_handphone',
        'hobi',
        'status_tempat_tinggal',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'kelurahan_desa',
        'nama_jalan',
        'kode_pos',
        'transport_ke_sekolah',
        'jarak_tempuh',
        'waktu_tempuh',
        'membiayai_sekolah',
        'pra_sekolah',
        'imunisasi',
        'nomor_kip',
        'nomor_kk',
        'nama_kepala_keluarga',
    ];

    public function program()
    {
        return $this->hasOne(Program::class, 'id_data_siswa');
    }
    public function verifikasi()
{
    return $this->hasOne(Verifikasi::class, 'id_data_siswa');
}
}
