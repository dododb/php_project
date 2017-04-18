<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InterractionUserImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire', function (Blueprint $table) {
            $table->increments('id');
            $table->string('commentaire');
            $table->timestamps();
        });
        Schema::create('like', function (Blueprint $table) {
            $table->integer('image_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('image');
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary(['user_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaire');
        Schema::dropIfExists('like');
    }
}
