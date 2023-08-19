<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Hootlex\Moderation\Moderatable;
use Laravel\Cashier\Billable;

class band extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'band';
    protected $fillable = [
        'band',
        'author',
        'lomba',
        'nama1',
        'nama2',
        'nama3',
        'nama4',
        'nama5',
        'nama6',
        'id_user',
        'nama_pj',
        'phone',
        'lagu_wajib',
        'lagu_pilihan',
        'id_card',
        'foto_band',
        'status_bayar',
        'logo'
    ];
    
    public function getPermissions(){
        band::with(['getPermissions']);
    }

    public function User()
    {
        return $this->belongsToMany(User::class);
    }
    protected $guard;
    
}
