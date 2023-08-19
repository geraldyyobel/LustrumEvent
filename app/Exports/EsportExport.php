<?php

namespace App\Exports;

use App\Models\Esport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EsportExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Esport::all();
    }
    public function headings(): array {
        return [
            "ID Form","ID User","Nama Tim","Akun","Lomba","Nama Peserta 1","Nama Peserta 2","Nama Peserta 3","Nama Peserta 4","Nama Peserta 5","Nama Peserta Cadangan","Nama Penanggung Jawab","Nomor Telepon Penanggung Jawab","Asal Sekolah","ID Card","Logo Tim","Foto Tim","Remember Token","Created At","Updated At"
        ];
    }
}
