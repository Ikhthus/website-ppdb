<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\DataSiswa;
use App\Models\Verifikasi;
use App\Http\Controllers\Auth;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $siswa = Program::with(['dataSiswa', 'user', 'verifikasi'])->paginate(10); // Menggunakan paginate
        return view('dashboard.admin', compact('siswa'));
    }

    public function updateVerifikasi(Request $request, $id)
    {
        // Ambil data siswa berdasarkan ID
        $dataSiswa = DataSiswa::findOrFail($id);

        // Tentukan status dari request
        $status = $request->status;

        // Buat atau perbarui data di tabel verifikasi
        Verifikasi::updateOrCreate(
            [
                'id_data_siswa' => $dataSiswa->id,
                'id_users' => $dataSiswa->id_users,
            ],
            [
                'status' => $status,
            ]
        );

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Status verifikasi berhasil diperbarui!');
    }
}
