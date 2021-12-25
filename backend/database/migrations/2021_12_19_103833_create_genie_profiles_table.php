<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_profiles', function (Blueprint $table) {
            $table->id();
            $table->String('network');
            $table->String('username');
            $table->String('url');

            // "network": "Twitter",
            // "username": "john",
            // "url": "https://twitter.com/john"

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
        Schema::dropIfExists('genie_profiles');
    }
}
