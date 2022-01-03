<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_dosen')->unsigned();
            $table->foreign('id_dosen')->references('id')->on('dosens');
            $table->string('nama_mahasiswa')->unsigned();
            $table->string('jurusan');
            $table->string('npm');
            $table->integer('hasil1');
            $table->integer('hasil2');
            $table->integer('hasil3');
            $table->integer('hasil4');
            $table->integer('hasil5');
            $table->integer('hasil6');
            $table->integer('hasil7');
            $table->integer('hasil8');
            $table->integer('hasil9');
            $table->integer('hasil10');
            $table->integer('hasil11');
            $table->integer('hasil12');
            $table->integer('hasil13');
            $table->integer('hasil14');
            $table->integer('hasil15');
            $table->integer('hasil16');
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
        Schema::dropIfExists('kuesioners');
    }
}
