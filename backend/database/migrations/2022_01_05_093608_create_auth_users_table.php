<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_user', function (Blueprint $table) {
            $table->id();
            $table->String('password');
            $table->dateTime('last_login')->nullable();
            $table->tinyInteger('is_superuser');
            $table->String('username');
            $table->String('first_name');
            $table->String('last_name');
            $table->String('email');
            $table->tinyInteger('is_staff');
            $table->tinyInteger('is_active');
            $table->dateTime('date_joined');
            // $table->timestamps();
        });
    }
   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_users');
    }
}
