<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class pendapatan extends Authenticatable
{
    use Notifiable;

    protected $table = 'pendapatan';

    protected $fillable = [
        'jadwal_id', 'jumlah', 'created_at', 'updated_at'
    ];

}
