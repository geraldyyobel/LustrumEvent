<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Esport extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='esport';

    protected $fillable=[
        'id_user',
        'author',
        'nama',
        'lomba',
        'pemain1',
        'pemain2',
        'pemain3',
        'pemain4',
        'pemain5',
        'cadangan',
        'nama_pj',
        'phone',
        'sekolah',
        'club',
        'id_card',
        'logo',
        'foto_tim'
    ];
}
