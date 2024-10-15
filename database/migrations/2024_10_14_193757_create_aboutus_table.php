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
        Schema::create('aboutus', function (Blueprint $table) {
            $table->id();
            $table->string('title1');       
            $table->string('title2');        
            $table->string('our_vision');  
            $table->string('vision');  
            $table->string('our_messege');
            $table->string('messege');
            $table->string('our_goals');
            $table->string('goals');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutus');
    }
};
