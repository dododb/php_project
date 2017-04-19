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
            //$table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('commentaire');
            $table->integer('image_id')->length(10)->unsigned();
            $table->integer('user_id')->length(10)->unsigned();

            $table->foreign('image_id')->references('id')->on('image')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');;
            $table->timestamps();
        });
        Schema::create('likes', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->integer('image_id')->length(10)->unsigned();
            $table->integer('user_id')->length(10)->unsigned();

            $table->foreign('image_id')->references('id')->on('image')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');;
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
