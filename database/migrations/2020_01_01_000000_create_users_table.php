<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', '191');
            $table->unsignedInteger('country_id');
            $table->boolean('status')->default('1');
            $table->enum('title', ['Mr.', 'Miss.', 'Dr.', 'Prof.', 'Ms.']);
            $table->string('name', '191');
            $table->string('email', '191')->unique();
            $table->string('mobile_number', '191')->unique()->nullable();
            $table->string('fax_number', '191')->unique()->nullable();
            $table->mediumText('address')->nullable();
            $table->string('live_dna', '191')->unique()->nullable();
            $table->string('scopus', '191')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', '191');
            $table->rememberToken();
            $table->timestamp('last_login_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
