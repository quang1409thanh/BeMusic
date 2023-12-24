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
        Schema::create('play_list_entityfe', function (Blueprint $table) {
            $table->id();
            $table->string('playlistId');
            $table->unsignedBigInteger('userId');
            $table->string('author')->nullable();
            $table->text('description');
            $table->string('duration');
            $table->integer('durationSeconds');
            $table->string('privacy')->default('PRIVATE');
            $table->string('thumbnails');
            $table->string('title');
            $table->integer('trackCount');
            $table->json('tracks')->nullable();
            $table->string('year')->nullable();
            $table->boolean('liked')->default(false);
            $table->timestamp('inLibrary')->useCurrent();
            $table->integer('downloadState')->default(0);

            //$table->primary(['id', 'userId']);
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
        Schema::dropIfExists('play_list_entityfe');
    }
};
