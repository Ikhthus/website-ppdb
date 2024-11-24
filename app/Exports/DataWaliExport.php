<?php

namespace App\Exports;

use App\Models\DataWaliSiswa;
use Dflydev\DotAccessData\Data;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataWaliExport implements FromView
{

    public function view(): View
    {
        return view('export.data_wali', [
            'data_wali' => DataWaliSiswa::all()
        ]);
    }
}
