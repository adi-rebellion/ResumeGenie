<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenieReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genie_references', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('reference');

            // "references": [{
            //     "name": "Jane Doe",
            //     "reference": "Reference…"
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
        Schema::dropIfExists('genie_references');
    }
}
