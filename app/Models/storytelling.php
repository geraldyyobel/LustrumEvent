<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class storytelling extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='storytelling';

    protected $fillable=[
        'id_user',
        'author',
        'jk',
        'lomba',
        'pemain',
        'phone',
        'sekolah',
        'alamat',
        'kelas',
        'judul',
        'naskah_asli',
        'naskah',
        'pendamping',
        'id_card',
        'logo'
    ];
}
