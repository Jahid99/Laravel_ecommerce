<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabpanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabpanes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name');
            $table->integer('product_id')->unsigned();
            

             $table->foreign('product_id')
           ->references('id')->on('products');

           $table->foreign('category_name')
           ->references('name')->on('categories')->onUpdate('cascade')
        ->onDelete('cascade');

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
        //
    }
}
