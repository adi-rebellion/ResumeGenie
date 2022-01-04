<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_projects', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->String('name');
            $table->String('company_name');
            $table->String('summary');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->String('url');
            $table->String('highlights')->nullable();
            $table->String('keywords')->nullable();
            
            $table->enum('status',[0,1,2])->nullable();
            $table->String('roles')->nullable();
            $table->String('entity')->nullable();
            $table->String('type')->nullable();

            // "projects": [{
            //     "name": "Project",
            //     "description": "Description…",
            //     "highlights": [
            //       "Won award at AIHacks 2016"
            //     ],
            //     "keywords": [
            //       "HTML"
            //     ],
            //     "startDate": "2019-01-01",
            //     "endDate": "2021-01-01",
            //     "url": "https://project.com/",
            //     "roles": [
            //       "Team Lead"
            //     ],
            //     "entity": "Entity",
            //     "type": "application"
            //   }]
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
        Schema::dropIfExists('genie_projects');
    }
}
