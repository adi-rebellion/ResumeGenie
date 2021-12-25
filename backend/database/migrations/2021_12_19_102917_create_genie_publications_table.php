<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeniePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_publications', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('publisher');
            $table->date('releaseDate');

            $table->String('url');
            $table->String('summary');
            $table->timestamps();
            // "publications": [{
            //     "name": "Publication",
            //     "publisher": "Company",
            //     "releaseDate": "2014-10-01",
            //     "url": "https://publication.com",
            //     "s
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genie_publications');
    }
}
