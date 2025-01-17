<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasslistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classlists', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_number')->index()->nullable();
            $table->foreign('id_number')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('schedule_id')->index()->nullable();
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');

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
        Schema::dropIfExists('classlists');
    }
}
