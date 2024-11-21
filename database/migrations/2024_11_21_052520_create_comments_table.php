<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->text('content'); // Comment content
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users
        $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Foreign key to posts
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
