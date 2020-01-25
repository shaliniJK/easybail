<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->integer('postcode');
            $table->string('country');
            $table->integer('nb_rooms');
            $table->integer('size')->nullable();
            $table->boolean('furnished')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
