<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorJournalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editor_journal', function (Blueprint $table) {
            $table->increments('id', '191');
            $table->unsignedInteger('editor_id');
            $table->unsignedInteger('journal_id');
            $table->timestamps();

            $table->foreign('editor_id')->references('id')->on('editors')->onDelete('cascade');
            $table->foreign('journal_id')->references('id')->on('journals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editor_journal');
    }
}
