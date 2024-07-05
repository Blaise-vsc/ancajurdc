<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading1')->nullable();
            $table->string('heading2')->nullable();
            $table->string('sub_h1')->nullable();
            $table->string('sub_h2')->nullable();
            $table->string('sub_h3')->nullable();
            $table->longText('download_message')->nullable();
            $table->string('phone')->nullable();
            $table->string('mail')->nullable();
            $table->longText('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('web')->nullable();
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
        Schema::dropIfExists('message');
    }
}
