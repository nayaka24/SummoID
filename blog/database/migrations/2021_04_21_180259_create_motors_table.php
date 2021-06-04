<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->Increments('id_motor');
            $table->string('nama');
            $table->decimal('harga','10','2');
            $table->text('deskripsi');
            $table->string('kategori');
            $table->string('gambar');
            $table->string('stnk');
            $table->boolean('verifikasi')->default('0');
            $table->boolean('transaksi')->default('0');
            $table->integer('users_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motors');
    }
}
