<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Crypt;
use Illuminate\Queue\SerializesModels;
use App\pemesanan;

class pembayaranDiverifikasiMail extends Mailable
{
    use Queueable, SerializesModels;

    private $pemesanan;
    
    public function __construct($id_transaction)
    {
        $this->pemesanan = pemesanan::find($id_transaction);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $subject = 'Pembayaran Berhasil';
        return $this->from('travelagency@gmail.com')
        ->subject($subject)
        ->with(['subject' => $subject, 'pemesanan' => $this->pemesanan])
        ->view('email.pembayaranDiverifikasiMail');
    }
}
