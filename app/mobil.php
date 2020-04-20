<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class mobil extends Authenticatable
{
    use Notifiable;

    protected $table = 'mobil';

    protected $fillable = [
        'plat', 'merk', 'warna', 'foto', 'created_at', 'updated_at'
    ];

}
