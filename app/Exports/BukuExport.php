<?php

namespace App\Exports;

use App\Models\Buku;
use App\Models\JenisBuku;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $buku = buku::all();
        $buku = DB::table('buku')->join('jenis_buku', 'jenis_buku.id', '=', 'buku.id') ->get(); //Join Judul buku dengan Nama Kategori
        return $buku;
    }
}
