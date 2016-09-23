<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id');
            $table->text('specification')->nullable();
            $table->string('serial_number')->nullable();
            $table->text('function')->nullable();
            $table->integer('asset_condition_id')->default(0);
            $table->integer('asset_performance_id')->default(0);
            $table->date('install_date')->nullable();
            $table->date('construction_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_details');
    }
}
