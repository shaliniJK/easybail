<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTypeAttributesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('property_type_attributes', function (Blueprint $table) {
            $table->unsignedBigInteger('property_type_id');
            $table->unsignedBigInteger('attribute_id');

            $table->foreign('property_type_id')
                ->references('id')
                ->on('property_types');

            $table->foreign('attribute_id')
                ->references('id')
                ->on('attributes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('property_type_attributes');
    }
}
