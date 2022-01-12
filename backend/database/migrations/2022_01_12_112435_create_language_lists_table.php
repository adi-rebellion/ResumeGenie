<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_lists', function (Blueprint $table) {
            
            $table->integer('Rank');
            $table->String('Language');
            $table->String('Native_speakers_in_millions_2007_2010')->nullable();
            $table->String('Fraction_of_world_population_2007')->nullable();
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
        Schema::dropIfExists('language_lists');
    }
}
