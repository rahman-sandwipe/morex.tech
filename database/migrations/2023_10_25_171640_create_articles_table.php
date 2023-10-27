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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->longText('content')->nullable();
            $table->enum('status',['Public','Private'])->default('Public');
            $table->string('thumbnail')->nullable();
            $table->mediumText('meta_tags')->nullable();
            $table->mediumText('meta_desc')->nullable();
            $table->bigInteger('article_author')->unsigned()->nullable();
            $table->bigInteger('article_cat')->unsigned()->nullable();
            $table->timestamps();
            
            $table->foreign('article_author')->references('id')->on('users')->onDelete('set null')->onUpdate('CASCADE');
            $table->foreign('article_cat')->references('id')->on('services')->onDelete('set null')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
