<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('NIS')->nullable();
            $table->string('Nama')->nullable();
            $table->string('JenisKelamin');
            $table->string('TempatLahir')->nullable();
            $table->date('TanggalLahir')->nullable();
            $table->text('Alamat')->nullable();
            $table->integer('NPSN')->nullable();
            $table->foreign('NPSN')->references('NPSN')->on('sekolahs')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('siswas');
    }
}
