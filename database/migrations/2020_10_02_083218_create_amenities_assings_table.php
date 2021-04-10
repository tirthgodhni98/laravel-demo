<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesAssingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities_assings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pro_id');
            $table->foreign('pro_id')->references('id')->on('propertys');
            $table->unsignedBigInteger('amenities_id');
            $table->foreign('amenities_id')->references('id')->on('amenitiess');
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
        Schema::dropIfExists('amenities_assings');
    }
}
