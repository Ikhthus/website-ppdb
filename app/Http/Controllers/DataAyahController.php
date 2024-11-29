<?php

namespace App\Http\Controllers;

use App\Models\DataAyah;
use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataAyahController extends Controller
{
    //
    public function create()
    {
        return view('pendaftaran.create_ayah'); // Form Pendaftaran
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $dataSiswa = DataSiswa::where('id_users', $user->id)->first();

        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'nik' => 'required|string|max:16|unique:data_ayah,nik',
            'kewarganegaraan' => 'required|string|max:50',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'pendidikan_terakhir' => 'required|string|max:50',
            'pekerjaan' => 'required|string|max:100',
            'penghasilan' => 'required|string|max:50',
            'no_handphone_aktif' => 'required|string|max:15',
            'status_tempat_tinggal' => 'required|string|max:50',
            'alamat' => 'required|string',
            'provinsi' => 'required|string|max:50',
            'kabupaten_kota' => 'required|string|max:50',
            'kecamatan' => 'required|string|max:50',
            'kelurahan_desa' => 'required|string|max:50',
            'nama_jalan' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'nomor_kk' => 'required|string|max:16',
        ]);

        // Add `id_users` and `id_data_siswa` based on logged-in user
        $validatedData['id_users'] = $user->id;
        $validatedData['id_data_siswa'] = $dataSiswa->id;

        DataAyah::create($validatedData);
        return redirect()->route('user.dashboard')->with('success', 'Pendaftaran berhasil!');
    }
    
}
