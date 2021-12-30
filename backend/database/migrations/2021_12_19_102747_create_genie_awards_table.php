<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_awards', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->String('title');
            $table->String('url');
            $table->date('date');
          
            $table->String('awarder');
            $table->String('summary');
            $table->enum('status',[0,1,2])->nullable();
            // "awards": [{
            //     "title": "Award",
            //     "date": "2014-11-01",
            //     "awarder": "Company",
            //     "summary": "There is no spoon."
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
        Schema::dropIfExists('genie_awards');
    }
}
