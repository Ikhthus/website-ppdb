<?php

namespace App\Exports;

use App\Models\DataIbu;
use Dflydev\DotAccessData\Data;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataIbuExport implements FromView
{

    public function view(): View
    {
        return view('export.data_ibu', [
            'data_ibu' => DataIbu::all()
        ]);
    }
}
