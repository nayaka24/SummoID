<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->Increments('id_hotel');
            $table->string('nama');
            $table->decimal('harga','10','2');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->boolean('verifikasi')->default('0');
            $table->integer('users_id');
            $table->unsignedInteger('Kuantitas');
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
        Schema::dropIfExists('hotels');
    }
}
