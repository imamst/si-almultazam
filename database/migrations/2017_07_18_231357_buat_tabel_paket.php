<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->increments('id_paket');
            $table->string('nama_paket');
            $table->string('kode_paket');
            $table->string('kategori');
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');
            $table->integer('jml_hari');
            $table->integer('kuota');
            $table->integer('kuota_sisa');
            $table->integer('harga');
            $table->string('jenis_kamar');
            $table->text('fasilitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket');
    }
}
