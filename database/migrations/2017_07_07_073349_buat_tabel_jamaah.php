<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelJamaah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamaah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->dateTime('tgl_lahir');
            $table->string('nama_ayah');
            $table->string('no_ktp');
            $table->text('alamat');
            $table->string('gol_darah');
            $table->string('telp');
            $table->string('handphone');
            $table->string('email');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('status_perkawinan');
            $table->string('no_passport');
            $table->string('tempat_passport');
            $table->string('masa_berlaku_passport');
            $table->dateTime('tanggal_passport');
            $table->integer('jumlah_umrah');
            $table->string('terakhir_umrah');
            $table->integer('jumlah_haji');
            $table->string('terakhir_haji');
            $table->string('file_ktp');
            $table->string('file_akta_lahir');
            $table->string('file_passport');
            $table->string('file_kartu_keluarga');
            $table->string('file_buku_nikah');
            $table->string('file_foto');
            $table->string('nama_instansi');
            $table->string('jabatan');
            $table->text('alamat_instansi');
            $table->string('kota_instansi');
            $table->string('kodepos_instansi');
            $table->string('nama_keluarga');
            $table->string('hub_keluarga');
            $table->string('telp_keluarga');
            $table->string('handphone_keluarga');
            $table->text('alamat_keluarga');
            $table->string('penyakit');
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
        Schema::drop('jamaah');
    }
}
