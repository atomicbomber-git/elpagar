<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTampilanSet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampilans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('favicon');
            $table->string('logo');
            $table->string('site_title');
            $table->string('site_keyword');
            $table->string('site_desc');
            $table->string('alamat');
            $table->char('no_hp',12);
            $table->string('email');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('kesbangpol');
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
        Schema::dropIfExists('tampilans');
    }
}
