<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfigurasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfigurasis', function (Blueprint $table) {
            $table->id();
            $table->string('website_title', 100)->nullable();
            $table->longText('website_description')->nullable();
            $table->longText('visi')->nullable();
            $table->longText('misi')->nullable();
            $table->string('facebook', 50)->nullable();
            $table->string('twitter', 50)->nullable();
            $table->string('youtube', 50)->nullable();
            $table->string('instagram', 50)->nullable();
            $table->string('pos_code',10)->nullable();
            $table->longtext('address', 255)->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->longtext('logo', 255)->nullable();
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
        Schema::dropIfExists('konfigurasis');
    }
}
