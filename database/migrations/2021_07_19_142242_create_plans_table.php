<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location', 40)->nullable(false);
            $table->string('image', 200)->nullable(false);
            $table->date('departure_date')->nullable(false);
            $table->date('arrival_date')->nullable(false);
            $table->string('departure_location', 30);
            $table->string('arrival_location', 30);
            $table->string('room', 30);
            $table->string('package', 200);
            $table->float('price', 8,2)->nullable(false);
       
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
        Schema::dropIfExists('plans');
    }
}