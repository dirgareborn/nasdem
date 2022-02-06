<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->char('nik', 16)->unique();
            $table->enum('jenis_kelamin', ['1','2']);
            $table->char('agama_id', 2);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('pendidikan');
            $table->enum('status', ['1', '2'])->default('1');
            $table->longText('foto')->nullable();
            $table->string('nomor_registrasi')->nullable();
            $table->unsignedBigInteger('jabatan_id')->nullable();
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
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
        Schema::dropIfExists('pengurus');
    }
}
