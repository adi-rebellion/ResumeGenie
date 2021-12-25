<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->String('email');
            $table->String('phone');
            $table->String('url');

            // "email": "john@gmail.com",
            // "phone": "(912) 555-4321",
            // "url": "https://johndoe.com",
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
        Schema::dropIfExists('genie_contacts');
    }
}
