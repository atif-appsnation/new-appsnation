<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechstacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techstacks', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->longText('image')->nullable();
            $table->longText('content')->nullable();
            $table->string('comment')->nullable();

            //stack for services 
            $table->tinyInteger('android')->nullable();
            $table->tinyInteger('ios')->nullable();
            $table->tinyInteger('game')->nullable();
            $table->tinyInteger('crossapp')->nullable();
            $table->tinyInteger('ecommerce')->nullable();
            $table->tinyInteger('web')->nullable();
            $table->tinyInteger('ar')->nullable();
            $table->tinyInteger('vr')->nullable();
            $table->tinyInteger('iot')->nullable();
            $table->tinyInteger('wearable')->nullable();

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
        Schema::dropIfExists('techstacks');
    }
}
