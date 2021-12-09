<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraRkaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pra_rka', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Barang dan Jasa', 'Belanja Modal']);
            $table->string('jenis_barang');
            $table->string('kode_rekening');
            $table->enum('jenis_pajak', ['PPN 10%', 'PPH23 4%', 'Pajak Daerah 10%', 'PPH21 5%']);
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
        Schema::dropIfExists('pra_rka');
    }
}
