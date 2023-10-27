<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('bg_image')->nullable();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->mediumText('sort_desc')->nullable();
            $table->string('global_presence')->nullable();
            $table->string('title_02')->nullable();
            $table->mediumText('sort_desc_02')->nullable();
            $table->string('image_02')->nullable();
            $table->string('image_03')->nullable();
            $table->string('title_03')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
