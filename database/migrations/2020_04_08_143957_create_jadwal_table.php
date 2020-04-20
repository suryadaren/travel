<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('kota_asal_id');
            $table->unsignedBigInteger('kota_tujuan_id');
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('mobil_id');

            $table->date('tanggal_berangkat');
            $table->time('jam_berangkat');
            $table->date('tanggal_sampai');
            $table->time('jam_sampai');
            $table->string('harga_tiket');
            $table->string('kursi_tersedia');
            $table->string('posisi_travel')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('kota_asal_id')
                ->references('id')->on('kota')
                ->onDelete('cascade');
            $table->foreign('kota_tujuan_id')
                ->references('id')->on('kota')
                ->onDelete('cascade');
            $table->foreign('driver_id')
                ->references('id')->on('user')
                ->onDelete('cascade');
            $table->foreign('mobil_id')
                ->references('id')->on('mobil')
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
        Schema::dropIfExists('jadwal');
    }
}
