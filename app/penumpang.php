<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class penumpang extends Authenticatable
{
    use Notifiable;

    protected $table = 'penumpang';

    protected $fillable = [
        'pemesanan_id', 'jadwal_id', 'nomor_ktp', 'nama', 'jenis_kelamin', 'created_at', 'updated_at'
    ];

}
