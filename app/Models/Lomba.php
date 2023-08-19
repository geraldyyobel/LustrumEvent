<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'lomba_temp';

    protected $fillable = [
        'id_user',
        'id_lomba',
        'id_regist'
    ];
    
    public function getPermissions(){
        band::with(['getPermissions']);
    }
    
}
