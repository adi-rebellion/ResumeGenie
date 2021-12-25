<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_volunteers', function (Blueprint $table) {
            $table->id();
            $table->String('organization');
            $table->String('position');
            $table->String('url');
            $table->date('startDate');
            $table->date('endDate');
            $table->String('summary');
            $table->String('highlights');
            $table->timestamps();
            // "organization": "Organization",
            // "position": "Volunteer",
            // "url": "https://organization.com/",
            // "startDate": "2012-01-01",
            // "endDate": "2013-01-01",
            // "summary": "Description…",
            // "highlights": [
            //   "Awarded 'Volunteer of the Month'"
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
        Schema::dropIfExists('genie_volunteers');
    }
}
