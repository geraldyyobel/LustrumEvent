<?php

namespace App\Exports;

use App\Models\Band;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BandExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Band::all();
    }

    public function headings(): array {
        return [
            "ID Form","ID User","Lomba","Nama Band","Logo Tim/Sekolah","Akun","Nama Peserta 1","Nama Peserta 2","Nama Peserta 3","Nama Peserta 4","Nama Penanggung Jawab","Nomor Telepon Penanggung Jawab","Lagu Wajib","Lagu Pilihan","ID Card","Foto Band","Remember Token","Created At","Updated At","Moderated At"
        ];
    }
}
