<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\pemesanan;
use App\jadwal;
use Carbon\Carbon;

class expiredPembayaran extends Command
{
    
    protected $signature = 'expired:pembayaran';

    protected $description = 'Update expired pembayaran every minute';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now()->format('Y:m:d H:i:s');
        $pemesanans = pemesanan::get();
        foreach ($pemesanans as $pemesanan) {
            $expired = $pemesanan->expired_pembayaran;
            $expired = Carbon::parse($expired);
            if ($expired < $now) {
                $pemesanan->status = "pembayaran expired";
                $pemesanan->save();

                $jadwal = $pemesanan->jadwal;
                $kursi_tersedia = $jadwal->kursi_tersedia;
                $jadwal->kursi_tersedia = $kursi_tersedia + $pemesanan->jumlah_penumpang;
                $jadwal->save();
            }
        }
    }
}
