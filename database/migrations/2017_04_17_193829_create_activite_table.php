<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiviteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_activite');
            $table->string('description_courte');
            $table->text('description_longue');
            $table->string('adresse');
            $table->float('prix');
            $table->string('photo_activite');
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
        Schema::dropIfExists('activite');
    }
}
