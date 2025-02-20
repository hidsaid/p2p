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
        Schema::create('guides', function (Blueprint $table) {
            $table->id('guide_id'); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->string('guide_pdf'); // File path or name
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
