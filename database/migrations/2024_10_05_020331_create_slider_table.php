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
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->string('text_1');        // Changed to string
            $table->string('text_2');        // Changed to string
            $table->text('button1_text');    
            $table->text('button2_text');    
            $table->string('button1_url');    // Changed to string
            $table->string('button2_url');    // Changed to string
            $table->string('image');          // Changed to string
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider');
    }
};
