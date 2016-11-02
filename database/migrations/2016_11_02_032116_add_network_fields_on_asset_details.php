<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNetworkFieldsOnAssetDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset_details', function (Blueprint $table) {
            $table->string('reservoir_capacity')->nullable();
            $table->string('contractor')->nullable();
            $table->string('contract')->nullable();
            $table->date('operational_date')->nullable();
            $table->text('description')->nullable();
            $table->string('pipe_diameter')->nullable();
            $table->string('network_diameter')->nullable();
            $table->double('length')->default(0);
            $table->double('number_of_valve')->default(0);
            $table->double('number_of_pipe_bridge')->default(0);
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
            $table->dropColumn('reservoir_capacity');
            $table->dropColumn('contractor');
            $table->dropColumn('contract');
            $table->dropColumn('operational_date');
            $table->dropColumn('description');
            $table->dropColumn('pipe_diameter');
            $table->dropColumn('network_diameter');
            $table->dropColumn('length');
            $table->dropColumn('number_of_valve');
            $table->dropColumn('number_of_pipe_bridge');
        });
    }
}
