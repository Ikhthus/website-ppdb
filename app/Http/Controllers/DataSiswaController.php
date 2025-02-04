<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;
use App\Models\Program;
use App\Models\Verifikasi;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class DataSiswaController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();

        // Ambil data verifikasi untuk user saat ini
        $verifikasi = Verifikasi::where('id_users', $user->id)->first();
        return view('dashboard.index', compact('verifikasi')); // Halaman Dashboard
    }

    public function create()
    {
        return view('pendaftaran.create'); // Form Pendaftaran
    }

    public function store(Request $request)
    {
        $existingData = DataSiswa::where('id_users', auth()->id())->first();

        if ($existingData) {
            return redirect()->route('dashboard.index')->withErrors(['error' => 'Anda hanya dapat mengisi formulir satu kali.']);
        }

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'nullable|max:20',
            'kewarganegaraan' => 'required|string|max:50',
            'nik' => 'required|string|max:20',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'anak_ke' => 'required|string|max:10',
            'jumlah_saudara' => 'required|string|max:10',
            'agama' => 'required|string|max:20',
            'cita_cita' => 'nullable|string|max:50',
            'no_handphone' => 'nullable|string|max:15',
            'hobi' => 'nullable|string|max:50',
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
            'pra_sekolah' => 'nullable|string|max:50',
            'imunisasi' => 'nullable|string|max:50',
            'no_kip' => 'nullable|string|max:20',
            'no_kk' => 'required|string|max:20',
            'nama_kepala_keluarga' => 'required|string|max:100',
        ]);

        $auth = auth()->user();
        if ($auth->nik != $request->nik) {
            return redirect()->route('pendaftaran.create')->withErrors(['error' => 'NIK tidak sesuai dengan NIK yang terdaftar']);
        }
        $uniqueNumber = random_int(1000000000, 9999999999);
        DataSiswa::create([
            'id_users' => auth()->id(),
            'no_pendaftaran' => '2025' . $uniqueNumber,
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
            'no_kip' => $request->no_kip,
            'no_kk' => $request->no_kk,
            'nama_kepala_keluarga' => $request->nama_kepala_keluarga,
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Berhasil mengisi formulir!');
    }


    public function createProgramKelas()
    {
        return view('pendaftaran.create_program');
    }
    public function InsertProgramKelas(Request $request)
    {
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

    public function PrintBuktiPendaftaran()
    {
        $idUser = auth()->id();
        $dataSiswa = DataSiswa::where('id_users', $idUser)->first();
        $program = Program::where('id_data_siswa', $dataSiswa->id)->first();

        $logoPath = public_path('logo3.png');
        $logoData = base64_encode(file_get_contents($logoPath));
        $logoSrc = 'data:image/png;base64,' . $logoData;

        $pdf = Pdf::loadView('pendaftaran.success', [
            'dataSiswa' => $dataSiswa,
            'program' => $program,
            'logoSrc' => $logoSrc,
        ])->setPaper('A4', 'portrait')->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'dpi' => 120,
            'defaultFont' => 'sans-serif',
        ]);
        return $pdf->download('bukti-ppdb.pdf');

        // return view('pendaftaran.success', compact('dataSiswa', 'program'));
    }

    public function PrintKartuUjian()
    {
        // $user = auth()->user();

        // $dataSiswa = DataSiswa::where('id_users', $user->id)->first();
        // $program = Program::where('id_data_siswa', $dataSiswa->id)->first();


        // $pdf = Pdf::loadView('pendaftaran.kartu', [
        //     'dataSiswa' => $dataSiswa,
        //     'program' => $program,
        // ])->setPaper('A4', 'portrait')->setOptions([
        //     'isHtml5ParserEnabled' => true,
        //     'isRemoteEnabled' => true,
        //     'dpi' => 120, 
        //     'defaultFont' => 'sans-serif',
        // ]);
        // ->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->setOptions(['isRemoteEnabled' => true]);
        // return $pdf->stream('kartu-ppdb.pdf');
        // return view('pendaftaran.kartu', compact('dataSiswa', 'program'));
        $user = auth()->user();
        $dataSiswa = DataSiswa::where('id_users', $user->id)->first();
        $program = Program::where('id_data_siswa', $dataSiswa->id)->first();

        $logoPath = public_path('logo3.png');
        $logoData = base64_encode(file_get_contents($logoPath));
        $logoSrc = 'data:image/png;base64,' . $logoData;

        $pdf = Pdf::loadView('pendaftaran.kartu', [
            'dataSiswa' => $dataSiswa,
            'program' => $program,
            'logoSrc' => $logoSrc
        ])->setPaper('A4', 'portrait')->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'dpi' => 120,
            'defaultFont' => 'sans-serif',
        ]);

        // return view('pendaftaran.kartu', compact('dataSiswa', 'program', 'logoSrc'));
        return $pdf->download('kartu-ppdb.pdf');
    }
}
