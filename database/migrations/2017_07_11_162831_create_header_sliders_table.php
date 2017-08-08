<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('image_1');
            $table->string('image_1_alt')->nullable();
            $table->string('image_2');
            $table->string('image_2_alt')->nullable();
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
        Schema::dropIfExists('header_sliders');
    }
}
