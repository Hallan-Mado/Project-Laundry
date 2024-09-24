<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_masuk');
            $table->string('nama_pelanggan');
            $table->string('jenis_layanan');
            $table->string('jenis_laundry');
            $table->decimal('berat', 8, 2);
            $table->string('metode_pembayaran');
            $table->decimal('total_harga', 10, 2); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
