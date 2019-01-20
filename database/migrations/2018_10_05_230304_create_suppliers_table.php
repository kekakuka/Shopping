<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('EmailAddress', 100);
            $table->string('Address', 100)->nullable();
            $table->string('WorkPhoneNumber', 30)->nullable();
            $table->string('HomePhoneNumber', 30)->nullable();
            $table->string('MobilePhoneNumber', 30);
            $table->string('LastName', 50);
            $table->string('FirstName', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
