<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editors', function (Blueprint $table) {
            $table->increments('id', '191');
            $table->unsignedInteger('country_id');
            $table->string('name', '191');
            $table->string('departmental_address', '191');
            $table->string('email', '191')->unique();
            $table->string('contact_number', '191')->unique()->nullable();
            $table->boolean('status')->nullable()->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editors');
    }
}
