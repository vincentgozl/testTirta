<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class TransaksiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;
    public function collection()
    {
        //
    }
    public function query()
    {
        return Transaksi::query();
    }
}
