<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Category name
            $table->string('image')->nullable(); // Category image
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('categories');
    }
    

    /**
     * Reverse the migrations.
     */
   
};
