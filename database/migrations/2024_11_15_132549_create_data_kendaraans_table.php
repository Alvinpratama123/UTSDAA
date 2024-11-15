<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKendaraansTable extends Migration
{
    public function up()
    {

        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('merk')->nullable();
            $table->string('model'); // Pastikan kolom model ada di sini
            $table->year('tahun');
            $table->string('warna');
            $table->string('nomor_polisi');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}
