<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnPemesananIdOnPendapatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendapatan', function (Blueprint $table) {



            $table->unsignedBigInteger('jadwal_id')->nullable();

            $table->foreign('jadwal_id')
                ->references('id')->on('jadwal')
                ->onDelete('cascade');
                
            $table->dropForeign('pendapatan_pemesanan_id_foreign');
            $table->dropColumn('pemesanan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
