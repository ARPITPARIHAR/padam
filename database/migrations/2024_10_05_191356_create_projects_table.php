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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('locationId')->nullable();
            $table->integer('sectorId')->nullable();
            $table->decimal('area' 10,2)->nullable();
            $table->string('featuredImage')->nullable();
            $table->longText('image')->nullable();
            $table->integer('status')->default(1)->comment('1=active, 0=inactive');
            $table->string('slug')->unique()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};