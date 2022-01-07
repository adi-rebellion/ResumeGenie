<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_profile', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('resume')->nullable();
            $table->tinyInteger('is_applicant')->default(1);
            $table->tinyInteger('is_employer')->default(0);
            $table->tinyInteger('is_interviewer')->default(0);
            $table->integer('user_id');
            $table->string('job_search_status')->nullable();
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
        Schema::dropIfExists('accounts_profiles');
    }
}
