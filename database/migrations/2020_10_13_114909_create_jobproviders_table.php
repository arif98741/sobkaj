<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobprovidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobproviders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender', 10);
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->string('mobile', 15);
            $table->string('provider_as', 35);
            $table->string('nid', 50)->nullable();
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
        Schema::drop('jobproviders');
    }
}
