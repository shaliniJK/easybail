<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeColumn extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->unsignedBigInteger('property_type_id');

            $table->foreign('property_type_id')
                  ->references('id')
                  ->on('property_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
        });
    }
}
