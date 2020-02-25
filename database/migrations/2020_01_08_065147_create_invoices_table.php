<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id', '191');
            $table->unsignedInteger('manuscript_id');
            $table->string('invoice_number')->unique()->nullable();
            $table->enum('status', ['pending', 'paid', 'no-action']);
            $table->timestamp('generated_at')->nullable();
            $table->timestamp('cleared_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('manuscript_id')->references('id')->on('manuscripts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
