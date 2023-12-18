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
        Schema::create('album_entityfe', function (Blueprint $table) {
            $table->string('browseId')->primary();
            $table->json('artistId')->nullable();
            $table->json('artistName')->nullable();
            $table->string('audioPlaylistId');
            $table->text('description');
            $table->string('duration')->nullable();
            $table->integer('durationSeconds');
            $table->string('thumbnails')->nullable();
            $table->string('title');
            $table->integer('trackCount');
            $table->json('tracks')->nullable();
            $table->string('type');
            $table->string('year')->nullable();
            $table->boolean('liked')->default(false);
            $table->timestamp('inLibrary')->useCurrent();
            $table->integer('downloadState')->default(0);

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
        Schema::dropIfExists('album_entityfe');
    }
};
