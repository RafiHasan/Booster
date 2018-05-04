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
            $table->string('first_name',100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('email',100)->unique()->nullable();
            $table->string('password',100)->nullable();
            $table->string('picture',100)->nullable()->default("default/profiledefault.png");
            $table->string('biography',2000)->nullable();
            $table->string('website',100)->nullable();
            $table->string('location',100)->nullable();
            $table->string('contact',100)->nullable();
            $table->string('accounttype',100)->nullable();
            $table->string('accountnumber',100)->nullable();
            $table->string('seson',100)->nullable();
            $table->string('depertment',100)->nullable();
            $table->string('session')->nullable();
            $table->string('token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
