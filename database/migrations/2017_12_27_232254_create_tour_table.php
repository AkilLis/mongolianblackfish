<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('river_id')->unsigned()->index();
            $table->string('name');
            $table->string('url');
            $table->integer('visit_count')->unsigned();
            $table->string('map_url');
            $table->integer('group_size');
            $table->integer('available_size');
            $table->integer('price');
            $table->string('type');
            $table->date('departure_date');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('tours');
    }
}
