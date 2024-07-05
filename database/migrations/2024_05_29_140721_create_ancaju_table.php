<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAncajuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ancaju', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomination')->nullable();
            $table->string('pays')->nullable();
            $table->string('province')->nullable();
            $table->string('quartier')->nullable();
            $table->string('commune')->nullable();
            $table->string('numero')->nullable();
            $table->string('referance')->nullable();
            $table->string('phone')->nullable();
            $table->string('mail')->nullable();
            $table->string('gerant')->nullable();
            $table->string('site')->nullable();
            $table->string('map')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('tiktok')->nullable();
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
        Schema::dropIfExists('ancaju');
    }
}
