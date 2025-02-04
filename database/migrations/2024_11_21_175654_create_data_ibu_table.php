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
        Schema::create('data_ibu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_data_siswa');
            $table->unsignedBigInteger('id_users');
            $table->string('nama_lengkap');
            $table->string('nama_siswa');
            $table->string('status');
            $table->string('nik')->unique();
            $table->string('kewarganegaraan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('penghasilan');
            $table->string('no_handphone_aktif');
            $table->string('status_tempat_tinggal');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('kelurahan_desa');
            $table->string('nama_jalan');
            $table->string('kode_pos');
            $table->string('no_kk');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_data_siswa')->references('id')->on('data_siswa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ibu');
    }
};
