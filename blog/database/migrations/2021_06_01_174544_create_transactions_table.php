<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->date('tanggal_ambil');
            $table->date('tanggal_kembali');
            $table->text('alamat');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->text('catatan');
            $table->tinyinteger('jenis_transaksi');
            $table->decimal('total','10','2');
            $table->tinyinteger('pembayaran');
            $table->tinyinteger('selesai');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('handphone', '16');
            $table->integer('carts_id');
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
        Schema::dropIfExists('transactions');
    }
}
