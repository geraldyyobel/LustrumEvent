<?php

namespace App\Exports;

use App\Models\SepakBola;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FutsalExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SepakBola::all();
    }
    public function headings(): array {
        return [
            "ID Form","ID User","Akun","Logo Tim/Sekolah","Formulir Pendaftaran","Nomor Penanggung Jawab","Asal Sekolah","Lomba","Alamat Sekolah","Remember Token","Created At","Updated At"
        ];
    }
}
