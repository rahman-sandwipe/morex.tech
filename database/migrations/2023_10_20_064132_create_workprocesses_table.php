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
        Schema::create('workprocesses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->mediumtext('sort_desc')->nullable();
            $table->string('bg_image')->nullable();
            $table->string('title_01')->nullable();
            $table->mediumtext('sort_desc_01')->nullable();
            $table->string('title_02')->nullable();
            $table->mediumtext('sort_desc_02')->nullable();
            $table->string('title_03')->nullable();
            $table->mediumtext('sort_desc_03')->nullable();
            $table->string('title_04')->nullable();
            $table->mediumtext('sort_desc_04')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workprocesses');
    }
};
