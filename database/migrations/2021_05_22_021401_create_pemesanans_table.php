<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->integer('jumlah_pemesan');
            $table->string('telepon_pemesan');
            $table->string('email_pemesan');
            $table->string('alamat_pemesan');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->string('gambar_barang');
            $table->string('status')->default('belum selesai');
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
        Schema::dropIfExists('pemesanans');
    }
}
