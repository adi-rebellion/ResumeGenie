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
            $table->String('name');
            $table->String('description');
            $table->String('highlights');
            $table->String('keywords');
            $table->date('startDate');
            $table->date('endDate');
            $table->String('url');
            $table->String('roles');
            $table->String('entity');
            $table->String('type');

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
