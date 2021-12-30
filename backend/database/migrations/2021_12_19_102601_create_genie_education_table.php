<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_education', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->String('institution')->nullable();
            $table->String('url')->nullable();
            $table->String('area')->nullable();
            $table->String('studyType')->nullable();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->float('score')->nullable();
            $table->String('courses')->nullable();
            $table->enum('status',[0,1,2])->nullable();
            $table->timestamps();
            // "education": [{
            //     "institution": "University",
            //     "url": "https://institution.com/",
            //     "area": "Software Development",
            //     "studyType": "Bachelor",
            //     "startDate": "2011-01-01",
            //     "endDate": "2013-01-01",
            //     "score": "4.0",
            //     "courses": [
            //       "DB1101 - Basic SQL"
            //     ]
            //   }],
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genie_education');
    }
}
