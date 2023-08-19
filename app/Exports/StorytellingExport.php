<?php

namespace App\Exports;

use App\Models\Storytelling;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StorytellingExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Storytelling::all();
    }
    public function headings(): array {
        return [
            "ID Form","ID User","Akun","Logo Tim/Sekolah","Lomba","ID Card","Nama Pemain","Jenis Kelamin","Kelas","Nama Pendamping","Nomor Telepon Pendamping","Nama Sekolah","Alamat Sekolah","Judul Naskah","Naskah","Naskah Asli","Remember Token","Created At","Updated At"
        ];
    }
}
