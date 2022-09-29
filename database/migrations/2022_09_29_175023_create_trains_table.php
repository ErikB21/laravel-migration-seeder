<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 100);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->time("departure_time");
            $table->time("arrival_time");
            $table->date('date');
            $table->integer('train_code');
            $table->integer('carriage_number');
            $table->boolean('in_time');
            $table->boolean('cancel_train');
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
        Schema::dropIfExists('trains');
    }
}
