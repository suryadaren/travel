<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class riwayat_posisi_travel extends Authenticatable
{
    use Notifiable;

    protected $table = 'riwayat_posisi_travel';

    protected $fillable = [
        'jadwal_id', 'nama_kota', 'created_at', 'updated_at'
    ];

}
