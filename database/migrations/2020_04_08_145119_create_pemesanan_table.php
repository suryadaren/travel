<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->BigInteger('id');

            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('jadwal_id');

            $table->string('bukti_pembayaran')->nullable();
            $table->string('jumlah_penumpang');
            $table->string('harga');
            $table->string('status');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('customer_id')
                ->references('id')->on('user')
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
        Schema::dropIfExists('pemesanan');
    }
}
