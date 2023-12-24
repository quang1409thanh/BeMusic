<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_historyfe', function (Blueprint $table) {
            $table->id();
            $table->string('query');
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            //$table->primary(['query', 'userId']);
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_historyfe');
    }
};
