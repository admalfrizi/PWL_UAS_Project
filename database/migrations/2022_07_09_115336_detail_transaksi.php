<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_transaksi', function (Blueprint $table) {
            $table->id("id_barang");
            $table->integer("id_header_transaksi");
            $table->integer("jumlah");
            $table->timestamps();
            $table->foreign("id_barang")->references("id")->on("barangs")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("id_header_transaksi")->references("id_header_transaksi")->on("header_transaksi")->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
}
