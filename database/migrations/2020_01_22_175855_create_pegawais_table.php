<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('NIP')->nullable();
            $table->string('Nama')->nullable();
            $table->string('JenisKelamin');
            $table->string('TempatLahir')->nullable();
            $table->date('TanggalLahir')->nullable();
            $table->text('Alamat')->nullable();
            $table->string('JenisPegawai');
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
        Schema::drop('pegawais');
    }
}
