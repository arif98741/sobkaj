<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender', 10);
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->string('mobile', 15);
            $table->string('nid', 50)->nullable();
            $table->string('cv', 50)->nullable();
            $table->rememberToken();
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
        Schema::drop('jobseekers');
    }
}
