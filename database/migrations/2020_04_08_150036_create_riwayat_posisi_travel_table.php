<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPosisiTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_posisi_travel', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('jadwal_id');

            $table->string('nama_kota');
            $table->timestamps();

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
        Schema::dropIfExists('riwayat_posisi_travel');
    }
}
