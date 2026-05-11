<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasestudyappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casestudyapps', function (Blueprint $table) {
            $table->id();
            $table->longText('image')->nullable();
            $table->longText('icon')->nullable();
            $table->string('tag')->nullable();
            $table->longText('heading')->nullable();
            $table->longText('content')->nullable();
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
        Schema::dropIfExists('casestudyapps');
    }
}
