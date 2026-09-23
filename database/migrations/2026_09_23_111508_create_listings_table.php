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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('location');
            $table->string('address')->nullable();
            $table->string('type'); 
            $table->decimal('price', 15, 2); 
            $table->string('status')->default('available'); 
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('size_sqm')->nullable();
            $table->string('primary_image_url')->nullable();
            $table->json('gallery_images')->nullable();
            $table->foreignId('agent_id')->nullable()->constrained()->nullOnDelete();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
