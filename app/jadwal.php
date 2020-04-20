<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class jadwal extends Authenticatable
{
    use Notifiable;

    protected $table = 'jadwal';

    protected $fillable = [
        'kota_asal_id', 'kota_tujuan_id', 'driver_id', 'mobil_id', 'tanggal_berangkat', 'tanggal_sampai', 'jam_berangkat', 'jam_sampai', 'harga_tiket', 'kursi_tersedia', 'posisi_travel', 'status', 'created_at', 'updated_at'
    ];

    public function mobil(){
    	return $this->belongsTo(mobil::class, 'mobil_id');
    }
    public function kota_asal(){
    	return $this->belongsTo(kota::class, 'kota_asal_id');
    }
    public function kota_tujuan(){
    	return $this->belongsTo(kota::class, 'kota_tujuan_id');
    }
    public function sopir(){
    	return $this->belongsTo(user::class, 'driver_id');
    }
    public function riwayat_posisi_travels(){
        return $this->hasMany(riwayat_posisi_travel::class);
    }
    public function pemesanans(){
        return $this->hasMany(pemesanan::class);
    }

}
