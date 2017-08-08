<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details');
            $table->string('company_name')->nullable();
            $table->string('email');
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('zip_code');
            $table->string('country');
            $table->string('state');
            $table->integer('phone')->nullable();
            $table->integer('mobile_phone');
            $table->string('fax')->nullable();
            $table->string('notes')->nullable();
            $table->enum('shipping_to_bill_address', ['yes', 'no']);
            $table->integer('cart_total_price');
            $table->integer('exo_tax');
            $table->integer('shipping_cost');
            $table->integer('total_charge');
            $table->enum('payment_method', ['pay_on_delivery', 'online']);
            $table->enum('status', ['pending', 'completed', 'cancelled']);
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
        Schema::dropIfExists('checkouts');
    }
}