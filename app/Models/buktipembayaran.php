<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

use Hootlex\Moderation\Moderatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class buktipembayaran extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
   

    protected $table='buktipembayaran';
    
    protected $fillable=[
        'bukti',
        'id_user',
        'author',
        'status',
        'phone',
    ];
    public function buktipembayaran()
    {
        // $records = buktipembayaran::table('buktipembayaran')
        //     ->orderBy('created_at', 'desc')
        //     ->get();
        // return $this->belongsToMany(buktipembayaran::class);
        return compact(['records']);
    }
}
