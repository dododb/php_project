<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InteractionUserArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achat', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('article_id')->length(10)->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('article_id')->references('id')->on('article')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');;
            $table->dateTime('date_achat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achat');
    }
}
