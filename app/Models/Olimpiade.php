<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Olimpiade extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='olimpiade';

    protected $fillable=[
        'id',
        'id_user',
        'author',
        'lomba',
        'nama_pj',
        'phone',
        'sekolah',
        'alamat',
        'club',
        'id_card1',
        'id_card2',
        'nama1',
        'nama2',
        'nama3',
        'nama4',
        'nama5',
        'nama6',
        'nisn1',
        'nisn2',
        'nisn3',
        'nisn4',
        'nisn5',
        'nisn6',
        'ttl1',
        'ttl2',
        'ttl3',
        'ttl4',
        'ttl5',
        'ttl6',
        'kelas1',
        'kelas2',
        'kelas3',
        'kelas4',
        'kelas5',
        'kelas6',
        'logo',
    ];
}
