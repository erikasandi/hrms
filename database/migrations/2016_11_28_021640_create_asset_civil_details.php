<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetCivilDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_civil_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id')->unsigned();
            $table->text('specification')->nullable();
            $table->string('contractor')->nullable();
            $table->date('construction_date')->nullable();
            $table->text('function')->nullable();
            $table->integer('asset_performance_id')->default(0);
            $table->text('performance_detail')->nullable();
            $table->integer('asset_condition_id')->default(0);
            $table->text('condition_detail')->nullable();
            $table->string('reservoir_capacity')->nullable();

            $table->foreign('asset_id')
                ->references('id')
                ->on('assets')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_civil_details');
    }
}
