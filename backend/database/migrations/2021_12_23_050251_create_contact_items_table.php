<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_items', function (Blueprint $table) {
            $table->id();
            $table->String('value');
            $table->integer('belongs_to')->nullable();
            $table->enum('contact_item_type',['email','phone']);
            $table->enum('verification_status',['verified','not_verified','not_required']);
            $table->String('verification_code')->nullable();
            $table->integer('created_by');
            $table->dateTime('verified_on')->nullable();
            $table->dateTime('released_on')->nullable();
            $table->enum('status',['on','off','deleted']);
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
        Schema::dropIfExists('contact_items');
    }
}
