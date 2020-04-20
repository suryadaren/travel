<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class user extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    protected $fillable = [
        'email', 'password', 'nama', 'nomor_telepon', 'alamat', 'foto', 'role', 'status', 'created_at', 'updated_at', 'remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
