<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_belanja', ['Barang', 'Jasa', 'Modal']);
            $table->decimal('jumlah_harga');
            $table->decimal('total');
            $table->string('file_nota');
            $table->foreignId('id_rka')->constrained('rka');
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
        Schema::dropIfExists('nota');
    }
}
