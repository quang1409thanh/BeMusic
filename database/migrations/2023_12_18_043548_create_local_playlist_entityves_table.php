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
        Schema::create('local_playlist_entityfe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('localPlaylistId');
            $table->unsignedBigInteger('userId');
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->timestamp('inLibrary')->useCurrent();
            $table->integer('downloadState')->default(0);

            $table->integer('syncedWithYouTubePlaylist')->default(0);
            $table->string('youtubePlaylistId')->nullable();
            $table->integer('syncState')->default(0);

            $table->json('tracks')->nullable();

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
        Schema::dropIfExists('local_playlist_entityfe');
    }
};
