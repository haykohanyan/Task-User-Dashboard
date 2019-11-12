<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login');
            $table->boolean('admin')->default(0);
            $table->string('email');
            $table->string('password');
            $table->boolean('gender');
            $table->string('country');
            $table->string('city');
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
