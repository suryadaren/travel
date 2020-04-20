<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class kota extends Authenticatable
{
    use Notifiable;

    protected $table = 'kota';

    protected $fillable = [
        'kode', 'nama', 'created_at', 'updated_at'
    ];

}
