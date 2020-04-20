<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBankOnPemesananTable extends Migration
{
    
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->string('nama_bank')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('nomor_rekening')->nullable();
        });
    }

    public function down()
    {
        //
    }
}
