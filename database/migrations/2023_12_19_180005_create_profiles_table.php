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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('company');
            $table->string('job_title');
            $table->string('location');
            $table->integer('category_id');
            $table->text('bio');
            $table->string('linkedin');
            $table->string('twitter')->nullable();
            $table->string('website')->nullable();
            $table->text('experience');
            $table->text('achievement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
