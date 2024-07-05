<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->string('post_nom')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('pays_ou_region')->nullable();
            $table->longText('adesse')->nullable();
            $table->string('ville')->nullable();
            $table->string('code')->nullable();
            $table->string('conf_code')->nullable();
            $table->string('date_d_arrivée')->nullable();
            $table->string('heure_d_arrivée')->nullable();
            $table->string('date_de_départ')->nullable();
            $table->string('heure_de_départ')->nullable();
            $table->string('nombre_d_adulte')->nullable();
            $table->string('nombre_d_enfant')->nullable();
            $table->string('demande')->nullable();
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
        Schema::dropIfExists('commande');
    }
}
