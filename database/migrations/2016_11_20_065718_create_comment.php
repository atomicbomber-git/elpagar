<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_posts')->nullable()->unsigned();
            $table->foreign('id_posts')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_pages')->nullable()->unsigned();
            $table->foreign('id_pages')->references('id')->on('pages')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama')->nullable();
            $table->string('foto')->nullable();
            $table->string('email')->nullable();
            $table->string('judul')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->boolean('read')->nullable();
            $table->integer('parent')->nullable()->unsigned();
            $table->foreign('parent')->references('id')->on('comments')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('comments');
    }
}
