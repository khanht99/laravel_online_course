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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('description', 255);
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('level');
            $table->string('category');
            $table->integer('price');
            $table->string('duration');
            $table->string('prerequisites', 500);
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
