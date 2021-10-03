<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHubungiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hubungi', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_wa');
            $table->string('nama_fb');
            $table->string('nama_twitter');
            $table->string('nama_instagram');
            $table->string('channel_youtube');
            $table->string('email');
            $table->string('kode_pos');
            $table->string('alamat');
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
        Schema::dropIfExists('hubungi');
    }
}
