<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNetworkAssetDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset_details', function (Blueprint $table) {
            $table->renameColumn('length', 'number_of_pipe');
            $table->dropColumn('network_diameter');
            $table->dropColumn('pipe_diameter');
            $table->string('location')->nullable();
            $table->string('location_2')->nullable();
            $table->double('length_per_pipe_diameter')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asset_details', function (Blueprint $table) {
            $table->renameColumn('number_of_pipe', 'length');
            $table->string('network_diameter')->nullable();
            $table->string('pipe_diameter')->nullable();
            $table->dropColumn('location');
            $table->dropColumn('location_2');
            $table->dropColumn('length_per_pipe_diameter');
        });
    }
}
