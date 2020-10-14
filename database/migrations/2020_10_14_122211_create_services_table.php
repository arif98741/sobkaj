<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_name');
            $table->unsignedBigInteger('service_type_id');
            $table->double('service_unit', 8, 2);
            $table->string('slug', 50);
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->foreign('service_type_id')->references('id')
                ->on('service_types')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('services');
    }
}
