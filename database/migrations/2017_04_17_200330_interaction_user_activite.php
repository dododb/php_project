<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InteractionUserActivite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrit', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->integer('activite_id')->length(10)->unsigned();
            $table->integer('user_id')->length(10)->unsigned();

            $table->foreign('activite_id')->references('id')->on('activite')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['user_id', 'activite_id']);
        });

        Schema::create('vote', function (Blueprint $table) {

            $table->integer('horaire_id')->length(10)->unsigned();
            $table->integer('user_id')->length(10)->unsigned();

            $table->foreign('horaire_id')->references('id')->on('tranche_horaire')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['horaire_id', 'user_id']);
        });

        Schema::create('tranche_horaire', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->time('horaire');
            $table->integer('activite_id')->length(10)->unsigned();

            $table->foreign('activite_id')->references('id')->on('activite')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscrit');
    }
}
