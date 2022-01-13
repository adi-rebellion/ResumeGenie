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
            $table->integer('user_id');
            $table->String('organization');
            $table->String('position');
            $table->String('url')->nullable();
            $table->date('start_date');
            $table->enum('status',['inactive','active'])->default('active');
            $table->date('end_date')->nullable();
            $table->String('summary');
            
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
