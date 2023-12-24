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
        Schema::create('lyrics_entityfe', function (Blueprint $table) {
            $table->id();
            $table->string('videoId');
            $table->unsignedBigInteger('userId');
            $table->boolean('error');
            $table->json('lines')->nullable();
            $table->string('syncType')->nullable();

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('lyrics_entityfe');
    }
};
