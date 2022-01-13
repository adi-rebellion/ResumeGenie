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
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->float('score')->nullable();
            $table->String('courses')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
            // "education": [
            //     {
            //       "institution": "Your school name",
            //       "area": "Your area of study or degree earned",
            //       "studyType": "",
            //       "startDate": "Your start date, in YYYY-MM-DD format",
            //       "endDate": "Your completion date, in YYYY-MM-DD format",
            //       "gpa": "",
            //       "courses": [
            //         ""
            //       ]
            //     }
            //   ],
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
