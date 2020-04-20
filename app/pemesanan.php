<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class pemesanan extends Authenticatable
{
    use Notifiable;

    protected $table = 'pemesanan';

    protected $fillable = [
        'id', 'customer_id', 'jadwal_id', 'bukti_pembayaran', 'jumlah_penumpang', 'harga', 'status', 'created_at', 'updated_at', 'nama_bank', 'nomor_rekening', 'nama_pemilik', 'expired_pembayaran'
    ];

    public function penumpangs(){
    	return $this->hasMany(penumpang::class);
    }
    public function customer(){
    	return $this->belongsTo(user::class,'customer_id');
    }
    public function jadwal(){
    	return $this->belongsTo(jadwal::class,'jadwal_id');
    }

}
