<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerformanceAndConditionDetailsOnAssetDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset_details', function (Blueprint $table) {
            $table->text('condition_detail')->nullable();
            $table->text('performance_detail')->nullable();
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
            $table->dropColumn('condition_detail');
            $table->dropColumn('performance_detail');
        });
    }
}
