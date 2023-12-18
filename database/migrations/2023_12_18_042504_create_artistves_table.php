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
            $table->string('channelId')->primary();
            $table->string('name');
            $table->string('thumbnails')->nullable();
            $table->boolean('followed')->default(false);
            $table->timestamp('inLibrary')->useCurrent();

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
