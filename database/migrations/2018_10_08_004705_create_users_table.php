<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->rememberToken();
            $table->string('Token');
            $table->string('EmailAddress', 100)->unique();
            $table->string('Address', 100);
            $table->string('WorkPhoneNumber', 30)->nullable();
            $table->string('HomePhoneNumber', 30)->nullable();
            $table->string('MobilePhoneNumber', 30);
            $table->string('LastName', 50);
            $table->string('FirstName', 50);
            $table->enum('Role', ['Member', 'Admin'])->default('Member');
            $table->string('Password', 50);
            $table->boolean('EmailConfirmed')->default(0);
            $table->boolean('Enabled')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
