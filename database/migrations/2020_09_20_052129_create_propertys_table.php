<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('registations');
            $table->string('email_id');
            $table->foreign('email_id')->references('email_id')->on('registrations');
            $table->string('name',100);
            $table->unsignedBigInteger('property_type');
            $table->foreign('property_type')->references('id')->on('property_types');
            $table->integer('rent');
            $table->string('address',250);
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('citys');
            $table->string('map');
            $table->integer('bedroom');
            $table->string('description',200);
            $table->integer('washroom');
            $table->integer('status');
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
        Schema::dropIfExists('propertys');
    }
}
