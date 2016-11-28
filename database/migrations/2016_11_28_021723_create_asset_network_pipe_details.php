<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetNetworkPipeDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_network_pipe_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id')->unsigned();
            $table->string('contract')->nullable();
            $table->string('location')->nullable();
            $table->string('location_2')->nullable();
            $table->string('contractor')->nullable();
            $table->date('operational_date')->nullable();
            $table->string('length_per_pipe_diameter')->nullable();
            $table->text('description')->nullable();
            $table->integer('asset_condition_id')->default(0);
            $table->text('condition_detail')->nullable();
            $table->string('number_of_pipe')->nullable();
            $table->string('number_of_valve')->nullable();
            $table->string('number_of_pipe_bridge')->nullable();

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
        Schema::dropIfExists('asset_network_pipe_details');
    }
}
