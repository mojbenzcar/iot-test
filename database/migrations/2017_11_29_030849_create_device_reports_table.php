<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'device_reports',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('device_id')->unsigned();
                $table->foreign('device_id')
                      ->references('id')->on('devices')
                      ->onDelete('cascade');
                $table->string("event", 50);
                $table->String("report")->nullable();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_reports');
    }
}
