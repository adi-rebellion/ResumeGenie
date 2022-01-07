<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsUserpermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_userpermission', function (Blueprint $table) {
            $table->id();
            $table->string('entitytype');
            $table->string('role');
            $table->integer('user_id');
            $table->integer('company_id')->nullable();
            // $table->timestamps();
        });
    }
 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts_userpermissions');
    }
}
