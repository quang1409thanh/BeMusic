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
        Schema::create('artistfe', function (Blueprint $table) {
            $table->id();
            $table->string('channelId');
            $table->unsignedBigInteger('userId');
            $table->string('name');
            $table->string('thumbnails')->nullable();
            $table->boolean('followed')->default(false);
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
        Schema::dropIfExists('artistfe');
    }
};
