<?php

namespace App\Exports;

use App\Models\DataSiswa;
use Dflydev\DotAccessData\Data;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataSiswaExport implements FromView
{

    public function view(): View
    {
        return view('export.data_siswa', [
            'data_siswa' => DataSiswa::all()
        ]);
    }
}
