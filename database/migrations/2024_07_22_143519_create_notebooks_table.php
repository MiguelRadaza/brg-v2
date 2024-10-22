<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notebooks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description');
            $table->unsignedBigInteger('verse_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('day');
            $table->integer('month');
            $table->string('journal_type');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('verse_id')->references('id')->on('verses')->onDelete('cascade');
            $table->index('title');
            $table->index('day');
            $table->index('month');
            $table->index('journal_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notebooks');
    }
};