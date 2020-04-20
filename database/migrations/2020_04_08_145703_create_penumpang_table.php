<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenumpangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpang', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pemesanan_id');
            $table->unsignedBigInteger('jadwal_id');

            $table->string('nomor_ktp');
            $table->string('nama');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->timestamps();

            $table->foreign('pemesanan_id')
                ->references('id')->on('pemesanan')
                ->onDelete('cascade');
            $table->foreign('jadwal_id')
                ->references('id')->on('jadwal')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penumpang');
    }
}
