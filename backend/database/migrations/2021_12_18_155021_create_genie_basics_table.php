<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_basics', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->String('name')->nullable();
            $table->String('label')->nullable();
            $table->String('image')->nullable();
            $table->String('summary')->nullable();
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
        Schema::dropIfExists('genie_basics');
    }
}
