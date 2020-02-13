<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->boolean('status')->default('0');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_number')->nullable();
            $table->string('job_type');
            $table->string('degree');
            $table->string('keywords');
            $table->string('identifier')->nullable();
            $table->text('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviewers');
    }
}
