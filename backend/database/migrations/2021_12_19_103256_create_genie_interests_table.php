<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_interests', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('keyword');

            // "interests": [{
            //     "name": "Wildlife",
            //     "keywords": [
            //       "Ferrets",
            //       "Unicorns"
            //     ]
            //   }],
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
        Schema::dropIfExists('genie_interests');
    }
}
