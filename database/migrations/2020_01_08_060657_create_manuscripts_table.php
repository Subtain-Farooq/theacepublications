<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscripts', function (Blueprint $table) {
            $table->increments('id', '191');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('journal_id');
            $table->unsignedInteger('type_id');
            $table->mediumText('title');
            $table->string('code', '191');
            $table->mediumText('authors');
            $table->mediumText('abstract');
            $table->enum('status', ['submitted', 'in review', 'review in progress', 'accepted', 'rejected']);
            $table->string('reason', '191')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('journal_id')->references('id')->on('journals');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manuscripts');
    }
}
