<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('issue_id');
            $table->enum('status', ['published', 'draft']);
            $table->text('title');
            $table->text('slug');
            $table->string('code', '191');
            $table->string('doi');
            $table->string('doi_link')->nullable();
            $table->string('pages','60');
            $table->string('authors','191');
            $table->longText('abstract');
            $table->text('cite');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('issue_id')->references('id')->on('issues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
