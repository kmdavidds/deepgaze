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
        Schema::create('user_answers', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->id('chapter_attempt_id');
            $table->id('answer_id');
            $table->text('answer_text')->nullable();
            $table->float('score')->nullable();
            $table->timestampTz('created_at')->useCurrent();

            $table->foreign('chapter_attempt_id')->references('id')->on('chapter_attempts')->onDelete('cascade');
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_answers');
    }
};
