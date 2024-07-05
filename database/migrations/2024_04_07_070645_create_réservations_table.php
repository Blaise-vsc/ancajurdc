<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRéservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('réservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->string('enregistrement')->nullable();
            $table->string('nuit')->nullable();
            $table->string('verifier')->nullable();
            $table->string('adultes')->nullable();
            $table->string('enfants')->nullable();
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
        Schema::dropIfExists('réservations');
    }
}
