<?php

namespace App\Exports;

use App\Models\Olimpiade;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OlimpiadeExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Olimpiade::all();
    }
    public function headings(): array {
        return [
            "ID Form","ID User","Akun","Lomba","Asal Sekolah","Logo Tim/Sekolah","Alamat Sekolah","Nama Penanggung Jawab","Nomor Telepon Penanggung Jawab","ID Card Tim 1","Nama Peserta 1 Tim 1","NISN Peserta 1 Tim 1","Tempat Tanggal Lahir Peserta 1 Tim 1","Kelas Peserta 1 Tim 1","Nama Peserta 2 Tim 1","NISN Peserta 2 Tim 1","Tempat Tanggal Lahir Peserta 2 Tim 1","Kelas Peserta 2 Tim 1","Nama Peserta 3 Tim 1","NISN Peserta 3 Tim 1","Tempat Tanggal Lahir Peserta 3 Tim 1","Kelas Peserta 3 Tim 1","Id Card Tim 2","Nama Peserta 1 Tim 2","NISN Peserta 1 Tim 2","Tempat Tanggal Lahir Peserta 1 Tim 2","Kelas Peserta 1 Tim 2","Nama Peserta 2 Tim 2","NISN Peserta 2 Tim 2","Tempat Tanggal Lahir Peserta 2 Tim 2","Kelas Peserta 2 Tim 2","Nama Peserta 3 Tim 2","NISN Peserta 3 Tim 2","Tempat Tanggal Lahir Peserta 3 Tim 2","Kelas Peserta 3 Tim 2","Remember Token","Created At","Updated At"
        ];
    }
}
