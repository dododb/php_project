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
            $table->increments('id');
            $table->integer('activite_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('activite_id')->references('id')->on('activite');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unique(array('activite_id', 'user_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
