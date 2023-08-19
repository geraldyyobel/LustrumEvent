<?php

namespace App\Exports;

use App\Models\Basket;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BasketExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Basket::all();
    }
    public function headings(): array {
        return [
            "ID Form","ID User","Akun","Logo Tim/Sekolah","File Formulir","Lomba","Nomor Telepon Penanggungjawab","Asal Sekolah","Alamat Sekolah","Nama Tim","Remember Token","Created At","Updated At","Moderated At"
        ];
    }
}
