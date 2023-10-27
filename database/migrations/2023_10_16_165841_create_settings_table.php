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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->string('project_tagline')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_email')->nullable();
            $table->string('author_phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('fevicon')->nullable();
            $table->text('meta_tags')->nullable();
            $table->mediumText('meta_desc')->nullable();
            $table->mediumText('copyright_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
