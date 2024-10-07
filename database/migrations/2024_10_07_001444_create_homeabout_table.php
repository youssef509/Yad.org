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
        Schema::create('homeabout', function (Blueprint $table) {
            $table->id();
            $table->string('title1');       
            $table->string('title2');        
            $table->text('text1');    
            $table->text('text2');    
            $table->string('our_vision');    
            $table->string('our_messege');
            $table->string('button_text');
            $table->string('button_url');
            $table->string('image1');
            $table->string('image2');
            $table->string('video_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homeabout');
    }
};
