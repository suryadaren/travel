<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\UploadBuktiPembayaran;
use Illuminate\Support\Facades\Mail;

class sendEmailUploadBuktiPembayaran implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    
    private $id_transaction;
    private $email;
    public function __construct($id_transaction, $email)
    {
        $this->id_transaction = $id_transaction;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new UploadBuktiPembayaran($this->id_transaction));
    }
}
