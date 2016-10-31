<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id')->unsigned();
            $table->integer('maintenance_type_id')->unsigned();
            $table->text('description')->nullable();
            $table->text('performance')->nullable();
            $table->date('maintenance_date');
            $table->timestamps();

            $table->foreign('asset_id')
                ->references('id')
                ->on('assets')
                ->onDelete('cascade');
        });

        Schema::create('maintenance_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maintenance_id')->unsigned();
            $table->string('file_name');
            $table->text('description');

            $table->foreign('maintenance_id')
                ->references('id')
                ->on('maintenances')
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
        Schema::dropIfExists('maintenance_images');
        Schema::dropIfExists('maintenances');
    }
}
