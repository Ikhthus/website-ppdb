<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->string('no_pendaftaran')->unique();
            $table->string('nama_lengkap');
            $table->string('nisn')->unique();
            $table->string('kewarganegaraan');
            $table->string('nik')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('agama');
            $table->string('cita_cita');
            $table->string('no_handphone');
            $table->string('hobi');
            $table->string('status_tempat_tinggal');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('kelurahan_desa');
            $table->string('nama_jalan');
            $table->string('kode_pos');
            $table->string('transport_ke_sekolah');
            $table->string('jarak_tempuh');
            $table->string('waktu_tempuh');
            $table->string('membiayai_sekolah');
            $table->string('pra_sekolah');
            $table->string('imunisasi');
            $table->string('nomor_kip')->nullable();
            $table->string('nomor_kk');
            $table->string('nama_kepala_keluarga');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswa');
    }
};
