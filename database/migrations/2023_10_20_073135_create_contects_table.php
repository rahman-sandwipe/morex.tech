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
        Schema::create('contects', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('addresstwo')->nullable();
            $table->string('phone')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('webmail')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contects');
    }
};
