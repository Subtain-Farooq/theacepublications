<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id', '191');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('reviewer_id')->nullable();
            $table->unsignedInteger('journal_id')->nullable();
            $table->unsignedInteger('manuscript_id')->nullable();
            $table->unsignedInteger('article_id')->nullable();
            $table->unsignedInteger('editor_id')->nullable();
            $table->string('title', '191')->nullable();
            $table->string('name', '191');
            $table->string('path', '191');
            $table->string('alt', '191')->nullable();
            $table->string('size', '191');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reviewer_id')->references('id')->on('reviewers');
            $table->foreign('journal_id')->references('id')->on('journals')->onDelete('cascade');
            $table->foreign('manuscript_id')->references('id')->on('manuscripts')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('editor_id')->references('id')->on('editors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
