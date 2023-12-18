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
        Schema::create('pair_song_local_playlistfe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('playlistId');
            $table->string('songId');
            $table->integer('position')->default(0);
            $table->timestamp('inPlaylist')->useCurrent();
            
            $table->foreign('playlistId')->references('id')->on('local_playlist_entityfe')->onDelete('cascade');
            $table->foreign('songId')->references('videoID')->on('songfe')->onDelete('cascade');
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
        Schema::dropIfExists('pair_song_local_playlistfe');
    }
};
