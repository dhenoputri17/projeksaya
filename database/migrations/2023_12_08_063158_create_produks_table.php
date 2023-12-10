<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id')->unsigned();
            $table->string('kode_produk', 11);
            $table->string('nama_produk');
            $table->text('deskripsi_produk');
            $table->string('foto')->nullable();
            $table->double('stok_awal', 12, 2)->default(0);
            $table->double('stok_minimal', 12, 2)->default(0);
            $table->double('stok_akhir', 12, 2)->default(0);
            $table->double('harga', 12, 2)->default(0);
            $table->string('status');
            $table->string('slug_produk');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
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
        Schema::dropIfExists('produks');
    }
};
