<?php

namespace App\Exports;

use App\Models\DataAyah;
use Dflydev\DotAccessData\Data;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataAyahExport implements FromView
{

    public function view(): View
    {
        return view('export.data_ayah', [
            'data_ayah' => DataAyah::all()
            // 'data_siswa' => DataSiswa::all()
        ]);
    }
}
