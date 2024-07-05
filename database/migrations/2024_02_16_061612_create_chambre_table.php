<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChambreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambre', function (Blueprint $table) {
            $table->increments('id');
            $table->string('attribution')->nullable();
            $table->string('taille')->nullable();
            $table->string('typeDeLit')->nullable();
            $table->string('equipements')->nullable();
            $table->string('installations')->nullable();
            $table->string('politiques')->nullable();
            $table->string('accessibilité')->nullable();
            $table->string('prix')->nullable();
            $table->string('details')->nullable();
            $table->string('imgSupplémentaireUn')->nullable();
            $table->string('imgSupplémentaireDeux')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('chambre');
    }
}
