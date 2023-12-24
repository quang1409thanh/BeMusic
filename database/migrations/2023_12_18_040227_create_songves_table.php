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
        Schema::create('songfe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->string('videoId');
            $table->string('albumId')->nullable();
            $table->string('albumName')->nullable();
            $table->json('artistId')->nullable();
            $table->json('artistName')->nullable();
            $table->string('duration');
            $table->integer('durationSeconds');
            $table->boolean('isAvailable');
            $table->boolean('isExplicit');
            $table->string('likeStatus');
            $table->string('thumbnails')->nullable();
            $table->string('title');
            $table->string('videoType');
            $table->string('category')->nullable();
            $table->string('resultType')->nullable();
            $table->boolean('liked')->default(false);
            $table->bigInteger('totalPlayTime')->default(0);
            $table->integer('downloadState')->default(0);
            $table->timestamp('inLibrary')->useCurrent();
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
        Schema::dropIfExists('songfe');
    }
};
