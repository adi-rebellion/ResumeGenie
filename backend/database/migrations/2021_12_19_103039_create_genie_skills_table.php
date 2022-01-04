<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_skills', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->String('name');
            $table->String('level')->nullable();
            $table->String('keywords')->nullable();
            $table->enum('status',[0,1,2])->nullable();
            // "skills": [{
            //     "name": "Web Development",
            //     "level": "Master",
            //     "keywords": [
            //       "HTML",
            //       "CSS",
            //       "JavaScript"
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
        Schema::dropIfExists('genie_skills');
    }
}
