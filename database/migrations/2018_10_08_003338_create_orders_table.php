<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->enum('OrderStatus', ['Waiting', 'Shipped'])->default('Waiting');
            $table->string('Address', 100);
            $table->string('MobilePhoneNumber', 30);
            $table->string('FullName', 100);
            $table->unsignedInteger('user_id');
            $table->unsignedDecimal('SubTotal',8,2);
            $table->unsignedDecimal('GST',12,2);
            $table->unsignedDecimal('Total',12,2);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
