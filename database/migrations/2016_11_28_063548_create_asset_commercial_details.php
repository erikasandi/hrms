<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetCommercialDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_commercial_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id')->unsigned();
            $table->string('address')->nullable();
            $table->string('gps_location')->nullable();
            $table->string('pic')->nullable();
            $table->string('phone')->nullable();
            $table->string('status')->nullable();
            $table->string('line_of_business')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('brand')->nullable();
            $table->string('size')->nullable();
            $table->date('install_date')->nullable();
            $table->string('meter_digit')->nullable();
            $table->string('meter_picture')->nullable();
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
        Schema::dropIfExists('asset_commercial_details');
    }
}
