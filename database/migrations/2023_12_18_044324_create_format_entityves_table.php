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
        Schema::create('format_entityfe', function (Blueprint $table) {
            $table->id();
            $table->string('videoId');
            $table->unsignedBigInteger('userId');
            $table->integer('itag')->nullable();
            $table->string('mimeType')->nullable();
            $table->bigInteger('bitrate')->nullable();
            $table->bigInteger('contentLength')->nullable();
            $table->bigInteger('lastModified')->nullable();
            $table->float('loudnessDb')->nullable();
            $table->string('uploader')->nullable();
            $table->string('uploaderId')->nullable();
            $table->string('uploaderSubCount')->nullable();
            $table->string('uploaderThumbnail')->nullable();
            $table->integer('lengthSeconds')->nullable();
            $table->text('description')->nullable();
            $table->string('youtubeCaptionsUrl')->nullable();
            $table->string('playbackTrackingVideostatsPlaybackUrl')->nullable();
            $table->string('playbackTrackingAtrUrl')->nullable();
            $table->string('playbackTrackingVideostatsWatchtimeUrl')->nullable();
            $table->string('cpn')->nullable();

            //$table->primary(['videoId', 'userId']);
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
        Schema::dropIfExists('format_entityfe');
    }
};
