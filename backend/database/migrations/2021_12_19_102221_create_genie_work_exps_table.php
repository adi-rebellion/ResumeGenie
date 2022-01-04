<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieWorkExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_work_exps', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->String('company');
            $table->String('position');
            $table->String('location');
            $table->String('website');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->enum('status',['0','1','2']);
            $table->String('summary');
            $table->String('highlights')->nullable();
            $table->timestamps();
            // "name": "Company",
            // "position": "President",
            // "url": "https://company.com",
            // "startDate": "2013-01-01",
            // "endDate": "2014-01-01",
            // "summary": "Description…",
            // "highlights": [
            //   "Started the company"
            // ]
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genie_work_exps');
    }
}
