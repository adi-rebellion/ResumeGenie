<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_socials', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('network_id');
            $table->string('user_name');
            $table->string('url');
            $table->enum('status',[0,1,2])->nullable();
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
        Schema::dropIfExists('genie_socials');
    }
}
