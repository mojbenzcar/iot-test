<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'devices',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('user')->unique();
                $table->string('name')->unique();
                $table->enum('status', ['on', 'off', 'running'])->default('off');
                $table->dateTime("start_time")->nullable();
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
        Schema::dropIfExists('devices');
    }
}
