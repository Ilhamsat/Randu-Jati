<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');//membuat kolom nama
            $table->text('file');
            $table->string('isi_paket');//membuat kolom email
            $table->integer('jml_paket');//membuat kolomnohp
            $table->integer('harga_paket');//me
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
        Schema::dropIfExists('paket_barang');
    }
}
