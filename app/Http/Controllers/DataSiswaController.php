<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;
use App\Models\Program;


class DataSiswaController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index'); // Halaman Dashboard
    }

    public function create()
    {
        return view('pendaftaran.create'); // Form Pendaftaran
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:20',
            'kewarganegaraan' => 'required|string|max:50',
            'nik' => 'required|string|max:20',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'anak_ke' => 'required|string|max:10',
            'jumlah_saudara' => 'required|string|max:10',
            'agama' => 'required|string|max:20',
            'cita_cita' => 'required|string|max:50',
            'no_handphone' => 'required|string|max:15',
            'hobi' => 'required|string|max:50',
            'status_tempat_tinggal' => 'required|string|max:50',
            'provinsi' => 'required|string|max:50',
            'kabupaten_kota' => 'required|string|max:50',
            'kecamatan' => 'required|string|max:50',
            'kelurahan_desa' => 'required|string|max:50',
            'nama_jalan' => 'required|string|max:100',
            'kode_pos' => 'required|string|max:10',
            'transport_ke_sekolah' => 'required|string|max:50',
            'jarak_tempuh' => 'required|string|max:20',
            'waktu_tempuh' => 'required|string|max:20',
            'membiayai_sekolah' => 'required|string|max:50',
            'pra_sekolah' => 'required|string|max:50',
            'imunisasi' => 'required|string|max:50',
            'nomor_kip' => 'nullable|string|max:20',
            'nomor_kk' => 'required|string|max:20',
            'nama_kepala_keluarga' => 'required|string|max:100',
        ]);

        DataSiswa::create([
            'id_users' => auth()->id(),
            'nama_lengkap' => $request->nama_lengkap,
            'nisn' => $request->nisn,
            'kewarganegaraan' => $request->kewarganegaraan,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'anak_ke' => $request->anak_ke,
            'jumlah_saudara' => $request->jumlah_saudara,
            'agama' => $request->agama,
            'cita_cita' => $request->cita_cita,
            'no_handphone' => $request->no_handphone,
            'hobi' => $request->hobi,
            'status_tempat_tinggal' => $request->status_tempat_tinggal,
            'provinsi' => $request->provinsi,
            'kabupaten_kota' => $request->kabupaten_kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan_desa' => $request->kelurahan_desa,
            'nama_jalan' => $request->nama_jalan,
            'kode_pos' => $request->kode_pos,
            'transport_ke_sekolah' => $request->transport_ke_sekolah,
            'jarak_tempuh' => $request->jarak_tempuh,
            'waktu_tempuh' => $request->waktu_tempuh,
            'membiayai_sekolah' => $request->membiayai_sekolah,
            'pra_sekolah' => $request->pra_sekolah,
            'imunisasi' => $request->imunisasi,
            'nomor_kip' => $request->nomor_kip,
            'nomor_kk' => $request->nomor_kk,
            'nama_kepala_keluarga' => $request->nama_kepala_keluarga,
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Pendaftaran berhasil!');
    }


    public function createProgramKelas() {
        return view('pendaftaran.create_program');
    }
    public function InsertProgramKelas(Request $request) {
        $request->validate([
            'kelas' => 'required',
        ]);

        $idUser = auth()->id();
        $dataSiswa = DataSiswa::where('id_users', $idUser)->first();

        if ($dataSiswa->id == null) {
            return redirect()->route('pendaftaran.create')->with('error', 'Anda belum melakukan pendaftaran');
        }
        Program::create([
            'id_users' => $idUser,
            'id_data_siswa' => $dataSiswa->id,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Pendaftaran berhasil!');
    }

    public function PrintBuktiPendaftaran() {
        $idUser = auth()->id();
        $dataSiswa = DataSiswa::where('id_users', $idUser)->first();
        $program = Program::where('id_data_siswa', $dataSiswa->id)->first();
        return view('pendaftaran.success', compact('dataSiswa', 'program'));
    }
}
