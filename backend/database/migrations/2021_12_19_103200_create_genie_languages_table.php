<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_languages', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->String('language');
            $table->String('fluency');
            $table->enum('status',['active','inactive'])->default('active');

            // "languages": [{
            //     "language": "English",
            //     "fluency": "Native speaker"
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
        Schema::dropIfExists('genie_languages');
    }
}
