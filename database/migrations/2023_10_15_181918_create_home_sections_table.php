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
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->string('sub_title');
            $table->string('title')->nullable();
            $table->mediumText('sort_desc')->nullable();
            $table->string('button_contact')->nullable();
            $table->string('button_blog')->nullable();
            $table->string('image')->nullable();
            $table->string('shape_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
